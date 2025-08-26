export async function handler(event) {
  if (event.httpMethod !== 'POST') {
    return { statusCode: 405, body: JSON.stringify({ success: false, message: 'Method Not Allowed' }) };
  }

  try {
    const { fullname, email, message } = JSON.parse(event.body || '{}');

    if (!fullname || !email || !message) {
      return { statusCode: 400, body: JSON.stringify({ success: false, message: 'Missing required fields' }) };
    }

    const payload = {
      personalizations: [
        { to: [{ email: process.env.TO_EMAIL }] }
      ],
      from: { email: process.env.FROM_EMAIL || process.env.TO_EMAIL },
      subject: `New contact from ${fullname}`,
      content: [
        {
          type: 'text/plain',
          value: `Name: ${fullname}\nEmail: ${email}\n\n${message}`
        }
      ]
    };

    const response = await fetch('https://api.sendgrid.com/v3/mail/send', {
      method: 'POST',
      headers: {
        'Authorization': `Bearer ${process.env.SENDGRID_API_KEY}`,
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(payload)
    });

    if (!response.ok) {
      const text = await response.text();
      console.error('SendGrid error:', text);
      return { statusCode: response.status, body: JSON.stringify({ success: false, message: 'Email failed to send' }) };
    }

    return { statusCode: 200, body: JSON.stringify({ success: true }) };
  } catch (error) {
    console.error('Function error:', error);
    return { statusCode: 500, body: JSON.stringify({ success: false, message: 'Server Error' }) };
  }
}
