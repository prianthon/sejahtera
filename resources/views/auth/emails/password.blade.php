Klik untuk pemulihan kata sandi: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
