
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Connexion Admin | Hewa Bora</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: #f8fafc;
            color: #1e293b;
        }

        /* Barre de progression */
        .page-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 100%;
            background: #f59e0b;
            transform-origin: left;
            animation: progress 1.2s ease-out forwards;
            z-index: 50;
        }

        @keyframes progress {
            from { transform: scaleX(0); }
            to { transform: scaleX(1); }
        }

        /* Animation d'apparition */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                translate: 0 25px;
            }
            to {
                opacity: 1;
                translate: 0 0;
            }
        }

        @keyframes logoAppear {
            from {
                opacity: 0;
                scale: 0.75;
                rotate: -8deg;
            }
            to {
                opacity: 1;
                scale: 1;
                rotate: 0deg;
            }
        }

        .page-appear {
            animation: fadeIn 0.7s ease-out both;
        }

        .login-card {
            animation: slideUp 0.7s ease-out both;
        }

        .logo-appear {
            animation: logoAppear 0.8s ease-out both;
        }

        /* Champs */
        .form-input {
            transition: border-color 0.2s ease,
                        box-shadow 0.2s ease,
                        background 0.2s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #f59e0b;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.15);
        }

        /* Bouton connexion */
        .login-button {
            transition: translate 0.2s ease,
                        box-shadow 0.2s ease,
                        background 0.2s ease;
        }

        .login-button:hover {
            translate: 0 -2px;
            box-shadow: 0 8px 18px rgba(217, 119, 6, 0.22);
        }

        .login-button:active {
            translate: 0 0;
        }

        /* Logo */
        .logo-container {
            transition: scale 0.25s ease,
                        box-shadow 0.25s ease;
        }

        .logo-container:hover {
            scale: 1.04;
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.2);
        }

        /* Bouton afficher mot de passe */
        .password-toggle {
            transition: color 0.2s ease,
                        background 0.2s ease;
        }

        .password-toggle:hover {
            color: #b45309;
            background: #fffbeb;
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4 py-8 font-sans page-appear">

    <div class="page-progress"></div>

    <main class="w-full max-w-md">

        <!-- Carte de connexion -->
        <div class="login-card bg-white border border-slate-200 rounded-2xl shadow-xl overflow-hidden">

            <!-- Bande dorée -->
            <div class="h-1 bg-gradient-to-r from-amber-400 via-amber-500 to-yellow-300"></div>

            <div class="p-6 sm:p-8">

                <!-- Logo rond -->
                <div class="flex flex-col items-center text-center mb-7">

                    <div class="logo-appear logo-container w-24 h-24 rounded-full
                                border-4 border-amber-400 p-1 bg-white shadow-md mb-4">

                        <img
                            src="{{ asset('img/Hewa_Bora_Logo.png') }}"
                            alt="Logo Hewa Bora"
                            class="w-full h-full rounded-full object-cover"
                        >

                    </div>

                    <h1 class="text-2xl font-bold text-slate-800">
                        Hewa Bora
                    </h1>

                    <p class="text-sm text-slate-500 mt-2">
                        Connexion à l'administration
                    </p>

                    <div class="w-12 h-1 rounded-full bg-amber-400 mt-4"></div>

                </div>

                <!-- Message session -->
                @if(session('message'))
                    <div class="bg-amber-50 border border-amber-200
                                text-amber-800 text-sm p-3 rounded-xl mb-5">
                        {{ session('message') }}
                    </div>
                @endif

                <!-- Erreurs -->
                @if($errors->any())
                    <div class="bg-red-50 border border-red-200
                                text-red-700 text-sm p-3 rounded-xl mb-5">
                        {{ $errors->first() }}
                    </div>
                @endif

                <!-- Formulaire -->
                <form
                    action="{{ route('dashboard.authenticate') }}"
                    method="POST"
                    class="space-y-5"
                >

                    @csrf

                    <!-- Identifiant -->
                    <div>
                        <label
                            for="username"
                            class="block text-sm font-medium text-slate-700 mb-2"
                        >
                            Identifiant
                        </label>

                        <div class="relative">

                            <span class="absolute left-4 top-1/2 -translate-y-1/2
                                         text-slate-400">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                            </span>

                            <input
                                type="text"
                                name="username"
                                id="username"
                                value="{{ old('username') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Votre identifiant"
                                class="form-input w-full border border-slate-200
                                       bg-slate-50 rounded-xl pl-11 pr-4 py-3
                                       text-slate-800 placeholder:text-slate-400"
                            >

                        </div>
                    </div>

                    <!-- Mot de passe -->
                    <div>
                        <label
                            for="password"
                            class="block text-sm font-medium text-slate-700 mb-2"
                        >
                            Mot de passe
                        </label>

                        <div class="relative">

                            <span class="absolute left-4 top-1/2 -translate-y-1/2
                                         text-slate-400">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <rect x="3" y="11" width="18" height="11" rx="2"/>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                            </span>

                            <input
                                type="password"
                                name="password"
                                id="password"
                                required
                                autocomplete="current-password"
                                placeholder="Votre mot de passe"
                                class="form-input w-full border border-slate-200
                                       bg-slate-50 rounded-xl pl-11 pr-14 py-3
                                       text-slate-800 placeholder:text-slate-400"
                            >

                            <!-- Bouton afficher / masquer -->
                            <button
                                type="button"
                                id="togglePassword"
                                aria-label="Afficher le mot de passe"
                                aria-pressed="false"
                                class="password-toggle absolute right-2 top-1/2
                                       -translate-y-1/2 p-2 rounded-lg
                                       text-slate-400"
                            >

                                <!-- Icône œil -->
                                <svg
                                    id="eyeIcon"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>

                            </button>

                        </div>

                        <p class="text-xs text-slate-400 mt-2">
                            Cliquez sur l'œil pour afficher ou masquer votre mot de passe.
                        </p>
                    </div>

                    <!-- Bouton connexion -->
                    <button
                        type="submit"
                        class="login-button w-full bg-amber-500 hover:bg-amber-400
                               text-slate-900 font-semibold py-3.5 rounded-xl
                               shadow-sm mt-2"
                    >
                        Se connecter
                    </button>

                </form>

            </div>
        </div>

        <!-- Pied de page -->
        <p class="text-center text-xs text-slate-400 mt-6">
            Hewa Bora Lounge & Night
        </p>

    </main>

    <!-- Script afficher / masquer -->
    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function () {

            const isHidden = passwordInput.type === 'password';

            passwordInput.type = isHidden ? 'text' : 'password';

            togglePassword.setAttribute(
                'aria-label',
                isHidden ? 'Masquer le mot de passe' : 'Afficher le mot de passe'
            );

            togglePassword.setAttribute(
                'aria-pressed',
                isHidden ? 'true' : 'false'
            );

            if (isHidden) {
                // Icône œil barré
                eyeIcon.innerHTML = `
                    <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/>
                    <path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/>
                    <path d="M3 3l18 18"/>
                `;
            } else {
                // Icône œil normal
                eyeIcon.innerHTML = `
                    <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/>
                    <circle cx="12" cy="12" r="3"/>
                `;
            }

        });
    </script>

</body>
</html>

