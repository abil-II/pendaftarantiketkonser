<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="x-apple-disable-message-reformatting">
        <title>Konfirmasi Pendaftaran Senja di Kota</title>
    </head>
    <body style="margin: 0; padding: 0; background-color: #f2f5fa; color: #172b4d; font-family: Arial, Helvetica, sans-serif;">
        <div style="display: none; max-height: 0; overflow: hidden; opacity: 0;">
            Pendaftaran Senja di Kota berhasil. Lihat ringkasan tiketmu di dalam email ini.
        </div>

        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #f2f5fa; padding: 32px 12px;">
            <tr>
                <td align="center">
                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; background-color: #ffffff; border-radius: 16px; overflow: hidden;">
                        <tr>
                            <td style="padding: 22px 32px; background-color: #1262d6;">
                                <span style="color: #ffffff; font-size: 23px; font-weight: 700; letter-spacing: -1px;">nada<span style="color: #a9d8ff;">.</span></span>
                                <span style="float: right; padding-top: 6px; color: #dceaff; font-size: 12px;">KONFIRMASI PENDAFTARAN</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 32px 32px 24px;">
                                <p style="margin: 0 0 12px; color: #16835d; font-size: 13px; font-weight: 700; letter-spacing: 0.4px;">✓ &nbsp; PENDAFTARAN BERHASIL</p>
                                <h1 style="margin: 0 0 12px; color: #172b4d; font-size: 25px; line-height: 1.3;">Sampai jumpa di konser, {{ $fullName }}!</h1>
                                <p style="margin: 0; color: #63738a; font-size: 15px; line-height: 1.6;">Terima kasih sudah mendaftar. Ini ringkasan tiket dan detail acara yang perlu kamu simpan.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0 32px 24px;">
                                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e1e9f4; border-radius: 12px;">
                                    <tr>
                                        <td style="padding: 20px 22px 16px; background-color: #f6f9ff; border-radius: 12px 12px 0 0;">
                                            <p style="margin: 0 0 7px; color: #1262d6; font-size: 11px; font-weight: 700; letter-spacing: 1px;">LIVE MUSIC &nbsp;·&nbsp; JAKARTA</p>
                                            <h2 style="margin: 0; color: #172b4d; font-size: 22px;">Senja di Kota</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 18px 22px;">
                                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td style="padding: 0 0 15px; color: #63738a; font-size: 13px; line-height: 1.5;">
                                                        <strong style="color: #172b4d;">Tanggal dan waktu</strong><br>
                                                        Sabtu, 28 November 2026 &nbsp;·&nbsp; 17.00 WIB
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 0 0 16px; color: #63738a; font-size: 13px; line-height: 1.5;">
                                                        <strong style="color: #172b4d;">Lokasi</strong><br>
                                                        Lapangan Purnawira, Jakarta Selatan
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 15px; border-top: 1px dashed #d9e2ef; color: #63738a; font-size: 13px; line-height: 1.8;">
                                                        <strong style="color: #172b4d;">Ringkasan tiket</strong><br>
                                                        General Admission <span style="float: right;">{{ $quantity }} tiket</span><br>
                                                        Pemesan <span style="float: right;">{{ $fullName }}</span><br>
                                                        WhatsApp <span style="float: right;">{{ $phone }}</span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 16px 22px; background-color: #f6f9ff; border-radius: 0 0 12px 12px;">
                                            <span style="color: #63738a; font-size: 13px;">Total pesanan</span>
                                            <strong style="float: right; color: #1262d6; font-size: 18px;">Rp {{ number_format($totalPrice, 0, ',', '.') }}</strong>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0 32px 28px;">
                                <p style="margin: 0; padding: 14px 16px; background-color: #fff8e8; border-radius: 8px; color: #765b20; font-size: 12px; line-height: 1.6;">Email ini merupakan konfirmasi pendaftaran, bukan bukti pembayaran atau tiket masuk. Simpan detail acara ini untuk referensi.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 20px 32px; background-color: #f6f8fb; color: #75839a; font-size: 12px; line-height: 1.7; text-align: center;">
                                Butuh bantuan? Hubungi <a href="mailto:halo@nada.id" style="color: #1262d6; text-decoration: none;">halo@nada.id</a><br>
                                © 2026 nada. Dibuat untuk momen yang berarti.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
