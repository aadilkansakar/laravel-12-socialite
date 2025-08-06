<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradient Wave Login Form</title>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
</head>

<body>
    <div class="wave-container">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
        <div class="wave wave-3"></div>
        <div class="wave wave-4"></div>
    </div>

    <div class="gradient-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="login-container">
        <div class="login-card">
            <div class="card-glow"></div>
            <div class="login-header">
                <div class="gradient-icon">
                    <div class="icon-wave"></div>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z" />
                        <path d="M2 17l10 5 10-5" />
                        <path d="M2 12l10 5 10-5" />
                    </svg>
                </div>
                <h2>Hi Again!</h2>
                <p>Sign in to continue your journey</p>
            </div>

            {{-- <form class="login-form" id="loginForm" novalidate>
                <div class="form-group">
                    <div class="input-container">
                        <div class="input-bg"></div>
                        <input type="email" id="email" name="email" required autocomplete="email" placeholder=" ">
                        <label for="email">Email Address</label>
                        <div class="input-wave"></div>
                    </div>
                    <span class="error-message" id="emailError"></span>
                </div>

                <div class="form-group">
                    <div class="input-container password-container">
                        <div class="input-bg"></div>
                        <input type="password" id="password" name="password" required autocomplete="current-password" placeholder=" ">
                        <label for="password">Password</label>
                        <button type="button" class="password-toggle" id="passwordToggle" aria-label="Toggle password visibility">
                            <div class="toggle-bg"></div>
                            <div class="toggle-icon">
                                <svg class="eye-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                <svg class="eye-closed" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
                                    <line x1="1" y1="1" x2="23" y2="23"/>
                                </svg>
                            </div>
                        </button>
                        <div class="input-wave"></div>
                    </div>
                    <span class="error-message" id="passwordError"></span>
                </div>

                <div class="form-options">
                    <div class="checkbox-container">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember" class="checkbox-label">
                            <div class="gradient-checkbox">
                                <div class="checkbox-bg"></div>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </div>
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" class="gradient-button">
                    <div class="button-bg"></div>
                    <div class="button-content">
                        <span class="btn-text">Sign In</span>
                        <div class="btn-loader">
                            <div class="loader-wave"></div>
                            <div class="loader-wave"></div>
                            <div class="loader-wave"></div>
                        </div>
                    </div>
                    <div class="button-ripple"></div>
                </button>
            </form> --}}

            <div class="divider">
                <div class="divider-line">
                    <div class="line-gradient"></div>
                </div>
                <a href="{{ route('home') }}"><span>Payment</span></a>
                <div class="divider-line">
                    <div class="line-gradient"></div>
                </div>
            </div>

            <div class="social-login">
                <a href="{{ route('social.login', 'google') }}" class="social-btn">
                    <div class="social-bg google-bg"></div>
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                        <path
                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                        <path
                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                        <path
                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                    </svg>
                </a>
                <a href="{{ route('social.login', 'linkedin') }}" class="social-btn">
                    <div class="social-bg facebook-bg"></div>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"
                                fill="#ffffff"></path>
                            <path
                                d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z"
                                fill="#ffffff"></path>
                            <path
                                d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z"
                                fill="#ffffff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z"
                                fill="#ffffff"></path>
                        </g>
                    </svg>
                </a>
                <a href="{{ route('social.login', 'discord') }}" class="social-btn">
                    <div class="social-bg apple-bg"></div>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11 12.5C11 13.8807 10.1046 15 9 15C7.89543 15 7 13.8807 7 12.5C7 11.1193 7.89543 10 9 10C10.1046 10 11 11.1193 11 12.5ZM8.22293 12.5C8.22293 13.0365 8.57084 13.4713 9 13.4713C9.42916 13.4713 9.77707 13.0365 9.77707 12.5C9.77707 11.9635 9.42916 11.5287 9 11.5287C8.57084 11.5287 8.22293 11.9635 8.22293 12.5Z"
                                fill="#ffffff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15 15C16.1046 15 17 13.8807 17 12.5C17 11.1193 16.1046 10 15 10C13.8954 10 13 11.1193 13 12.5C13 13.8807 13.8954 15 15 15ZM15 13.4713C14.5708 13.4713 14.2229 13.0365 14.2229 12.5C14.2229 11.9635 14.5708 11.5287 15 11.5287C15.4292 11.5287 15.7771 11.9635 15.7771 12.5C15.7771 13.0365 15.4292 13.4713 15 13.4713Z"
                                fill="#ffffff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.9864 3.33561C9.94083 3.06219 9.78382 2.81995 9.55284 2.66671C9.32186 2.51347 9.03764 2.46298 8.76801 2.52729C6.61476 3.04085 5.39826 3.471 3.47772 4.64723C3.33168 4.73668 3.21105 4.86214 3.1274 5.01158C1.9368 7.13867 1.14514 8.97344 0.657859 10.9416C0.171558 12.9058 1.51992e-05 14.9565 0 17.5C0 17.7652 0.105353 18.0196 0.292888 18.2071C1.35191 19.2661 2.45067 20.1002 3.71884 20.6638C4.99135 21.2294 6.3833 21.5 8 21.5C8.43043 21.5 8.81257 21.2246 8.94868 20.8162L9.62339 18.7921C10.3731 18.918 11.1769 19 12 19C12.8231 19 13.6269 18.918 14.3766 18.7921L15.0513 20.8162C15.1874 21.2246 15.5696 21.5 16 21.5C17.6167 21.5 19.0086 21.2294 20.2812 20.6638C21.5493 20.1002 22.6481 19.2661 23.7071 18.2071C23.8946 18.0196 24 17.7652 24 17.5C24 14.9565 23.8284 12.9058 23.3421 10.9416C22.8549 8.97344 22.0632 7.13867 20.8726 5.01158C20.789 4.86214 20.6683 4.73668 20.5223 4.64723C18.6017 3.471 17.3852 3.04085 15.232 2.52729C14.9624 2.46298 14.6781 2.51347 14.4472 2.66671C14.2162 2.81995 14.0592 3.06219 14.0136 3.33561L13.6356 5.60381C13.129 5.53843 12.5832 5.49994 12 5.49994C11.4168 5.49994 10.8709 5.53843 10.3644 5.60381L9.9864 3.33561ZM16.7135 19.4783L16.3365 18.3471C17.2221 18.0953 18.1008 17.7971 18.9331 17.4013C19.4309 17.1622 19.6405 16.5647 19.4014 16.0669C19.1622 15.5692 18.5647 15.3597 18.0669 15.5986C17.4725 15.8793 16.8456 16.1 16.2191 16.2953C15.0702 16.6535 13.5516 17 12 17C10.4484 17 8.92975 16.6535 7.78088 16.2953C7.15483 16.1001 6.53092 15.8781 5.93607 15.6C5.44219 15.3668 4.83698 15.5709 4.59864 16.0669C4.36123 16.561 4.57887 17.1681 5.0722 17.4039C5.90316 17.7978 6.77969 18.0958 7.66354 18.3471L7.28647 19.4783C6.22623 19.4118 5.33457 19.1933 4.53112 18.8362C3.65215 18.4455 2.83779 17.8709 2.00169 17.0797C2.02016 14.8272 2.19155 13.069 2.59925 11.4223C3.01458 9.74468 3.68586 8.13987 4.7452 6.2178C6.0043 5.46452 6.90106 5.0901 8.19227 4.73633L8.40706 6.02507C7.53196 6.29408 6.64115 6.64982 5.903 7.1977C5.46929 7.52129 5.37507 8.1667 5.7 8.59994C6.03024 9.04026 6.6539 9.1307 7.09547 8.80332C7.4639 8.53958 7.89071 8.34569 8.30889 8.17842C9.14624 7.84348 10.3952 7.49994 12 7.49994C13.6048 7.49994 14.8538 7.84348 15.6911 8.17842C16.1093 8.34568 16.5361 8.53955 16.9045 8.8033C17.3461 9.1307 17.9698 9.04027 18.3 8.59994C18.6241 8.16782 18.526 7.51604 18.0932 7.19491C17.3475 6.65617 16.4693 6.29447 15.5929 6.02507L15.8077 4.73633C17.0989 5.0901 17.9957 5.46452 19.2548 6.2178C20.3141 8.13987 20.9854 9.74468 21.4008 11.4223C21.8085 13.069 21.9798 14.8272 21.9983 17.0797C21.1622 17.8709 20.3479 18.4455 19.4689 18.8362C18.6654 19.1933 17.7738 19.4118 16.7135 19.4783ZM9 15C10.1046 15 11 13.8807 11 12.5C11 11.1193 10.1046 10 9 10C7.89543 10 7 11.1193 7 12.5C7 13.8807 7.89543 15 9 15ZM17 12.5C17 13.8807 16.1046 15 15 15C13.8954 15 13 13.8807 13 12.5C13 11.1193 13.8954 10 15 10C16.1046 10 17 11.1193 17 12.5ZM9 13.4713C8.57084 13.4713 8.22293 13.0365 8.22293 12.5C8.22293 11.9635 8.57084 11.5287 9 11.5287C9.42916 11.5287 9.77707 11.9635 9.77707 12.5C9.77707 13.0365 9.42916 13.4713 9 13.4713ZM15 13.4713C14.5708 13.4713 14.2229 13.0365 14.2229 12.5C14.2229 11.9635 14.5708 11.5287 15 11.5287C15.4292 11.5287 15.7771 11.9635 15.7771 12.5C15.7771 13.0365 15.4292 13.4713 15 13.4713Z"
                                fill="#ffffff"></path>
                        </g>
                    </svg>
                </a>
            </div>

            @if (Route::has('register'))
                <div class="signup-link">
                    <p>New to our platform? <a href="{{ route('register') }}">Create account</a></p>
                </div>
            @endif

            <div class="success-message" id="successMessage">
                <div class="success-wave"></div>
                <div class="success-content">
                    <div class="success-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                    <h3>Welcome back!</h3>
                    <p>Redirecting to your dashboard...</p>
                </div>
            </div>
        </div>
    </div>

    <script src="../../shared/js/form-utils.js"></script>
    {{-- <script src="script.js"></script> --}}
    <script src="{{ asset('assets/login.js') }}"></script>
</body>

</html>
