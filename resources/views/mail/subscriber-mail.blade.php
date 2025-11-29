<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>New comment on your subscribed blog</title>
	</head>
	<body style="font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; background:#f7fafc; margin:0; padding:20px;">
		<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
			<tr>
				<td align="center">
					<table width="640" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 20px rgba(16,24,40,0.05);">
						<tr>
							<td style="padding:24px 28px; border-bottom:1px solid #eef2f7;">
								<h1 style="margin:0; font-size:18px; color:#0f172a;">New comment on a blog you subscribed to</h1>
							</td>
						</tr>

						<tr>
							<td style="padding:20px 28px;">
								<p style="margin:0 0 12px 0; color:#334155; font-size:15px;">Hi there,</p>

								<p style="margin:0 0 12px 0; color:#334155; font-size:15px;">
									<strong style="color:#0f172a;">{{ $author->name ?? 'Someone' }}</strong> left a comment on the blog:
								</p>

								<h2 style="margin:6px 0 12px 0; font-size:16px; color:#0f172a;">{{ $blog->title ?? 'Untitled post' }}</h2>

								@if(isset($comment) && $comment)
									<div style="margin:0 0 16px 0; color:#334155; font-size:14px; line-height:1.5; border-left:3px solid #e6eef8; padding:10px 12px; background:#fbfdff;">
										{{ Str::limit($comment, 200) }}
									</div>
								@endif

								<p style="margin:0 0 18px 0;">
									<a href="http://127.0.0.1:8000/blogs/{{ $blog->slug ?? '#' }}" style="display:inline-block; padding:10px 16px; background:#4f46e5; color:#fff; border-radius:6px; text-decoration:none; font-weight:600;">View the conversation</a>
								</p>

								<p style="margin:0; color:#94a3b8; font-size:13px;">You are receiving this email because you subscribed to updates for this blog. If you no longer wish to receive these notifications, manage your subscriptions in your account settings.</p>
							</td>
						</tr>

						<tr>
							<td style="padding:14px 28px; background:#f8fafc; text-align:center; font-size:12px; color:#94a3b8;">
								© {{ date('Y') }} CodeTalk — Writing about code, design and developer life.
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
