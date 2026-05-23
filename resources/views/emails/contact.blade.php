<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pesan Baru — Portfolio</title>
<style>
  body { margin: 0; padding: 0; background: #030508; font-family: 'Courier New', monospace; color: #e8f4f8; }
  .wrapper { max-width: 600px; margin: 0 auto; padding: 40px 20px; }
  .header { background: linear-gradient(135deg, #080d12, #001a33); border: 1px solid rgba(0,195,255,.2); border-radius: 12px; padding: 32px; margin-bottom: 24px; text-align: center; }
  .logo { font-size: 1.4rem; font-weight: 900; margin-bottom: 8px; }
  .logo-bracket { color: #00ff88; }
  .logo-text { color: #00c3ff; }
  .header-sub { font-size: 11px; color: #8ab0c0; letter-spacing: 3px; text-transform: uppercase; }
  .card { background: #080d12; border: 1px solid rgba(0,195,255,.15); border-radius: 10px; padding: 28px; margin-bottom: 16px; }
  .label { font-size: 10px; letter-spacing: 2px; text-transform: uppercase; color: #00ff88; margin-bottom: 6px; }
  .value { font-size: 14px; color: #e8f4f8; line-height: 1.6; }
  .message-box { background: rgba(0,195,255,.04); border-left: 3px solid #00c3ff; padding: 16px; border-radius: 4px; margin-top: 8px; white-space: pre-wrap; }
  .footer { text-align: center; padding: 24px 0; font-size: 11px; color: #8ab0c0; letter-spacing: 1px; }
  .divider { height: 1px; background: linear-gradient(90deg, transparent, rgba(0,195,255,.3), transparent); margin: 24px 0; }
  .badge { display: inline-block; padding: 4px 12px; border: 1px solid rgba(0,255,136,.3); border-radius: 100px; font-size: 11px; color: #00ff88; margin-bottom: 12px; }
</style>
</head>
<body>
<div class="wrapper">
  <div class="header">
    <div class="logo">
      <span class="logo-bracket">[</span><span class="logo-text">DEV</span><span class="logo-bracket">_</span><span class="logo-bracket">]</span>
    </div>
    <div class="header-sub">Portfolio Contact Form</div>
  </div>

  <div class="card">
    <div class="badge">// Pesan Masuk Baru</div>

    <div style="margin-bottom:20px">
      <div class="label">Nama</div>
      <div class="value">{{ $name }}</div>
    </div>

    <div style="margin-bottom:20px">
      <div class="label">Email</div>
      <div class="value">
        <a href="mailto:{{ $email }}" style="color:#00c3ff;text-decoration:none;">{{ $email }}</a>
      </div>
    </div>

    @if(!empty($subject))
    <div style="margin-bottom:20px">
      <div class="label">Subject</div>
      <div class="value">{{ $subject }}</div>
    </div>
    @endif

    <div>
      <div class="label">Pesan</div>
      <div class="message-box value">{{ $message }}</div>
    </div>
  </div>

  <div class="divider"></div>

  <div class="footer">
    <p>Email ini dikirim otomatis dari Portfolio Contact Form</p>
    <p style="margin-top:8px;color:rgba(138,176,192,.5)">{{ now()->format('d F Y, H:i') }} WIB</p>
  </div>
</div>
</body>
</html>
