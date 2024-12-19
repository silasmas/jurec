<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification de Message</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }
        .email-header {
            background-color: #458630;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .email-header img {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .email-content {
            padding: 20px;
        }
        .email-content .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #458630;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
        .email-content .btn:hover {
            background-color: #0056b3;
        }
        .email-footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #555;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons img {
            width: 24px;
            margin: 0 5px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- En-tête avec le logo -->
        <div class="email-header">
            <img src="{{ asset('storage/'.$setting->site_logo) }}" alt="Logo de l'entreprise">
            <h1>Notification de Message</h1>
        </div>

        <!-- Contenu principal -->
        <div class="email-content">
            <h2>Bonjour {{ $userName }},</h2>
            <p>Nous souhaitons vous informer qu'un message a été <strong>{{ $action }}</strong> :</p>
            <blockquote style="border-left: 4px solid #458630; padding-left: 10px; margin: 10px 0; color: #555;">
                {{ $messageContent }}
            </blockquote>
            <p>Si vous avez des questions ou des préoccupations, n'hésitez pas à contacter l'administrateur.</p>

            <!-- Bouton de connexion -->
            <a href="{{ url(config('app.url').'/admin') }}" class="btn">Aller sur la partie admin</a>

            <p>Cordialement,</p>
            <p><strong>L'équipe de {{ config('app.name') }}</strong></p>
        </div>

        <!-- Pied de page -->
        <div class="email-footer">
            <p>Vous recevez cet e-mail parce que vous avez choisi de recevoir des notifications.</p>
            <p>Suivez-nous sur :</p>
            <div class="social-icons">

                        <a href="{{ $settings['facebook'] }}" target="blank" {{ $settings['facebook']??"hidden" }}> <i class="fab fa-facebook"></i> </a>


                        <a href="{{ $settings['x_twitter'] }}" target="blank"
                        {{ $settings['x_twitter']??"hidden" }}> <i class="fab fa-x"></i> </a>


                        <a href="{{ $settings['instagram'] }}" target="blank"
                        {{ $settings['instagram']??"hidden" }}> <i class="fab fa-instagram"></i> </a>


                        <a href="{{ $settings['youtube'] }}" target="blank"
                        {{ $settings['youtube']??"hidden" }}> <i class="fab fa-youtube"></i> </a>

                {{-- <a href="https://facebook.com" target="_blank">
                    <img src="https://via.placeholder.com/24/007bff?text=F" alt="Facebook">
                </a>
                <a href="https://twitter.com" target="_blank">
                    <img src="https://via.placeholder.com/24/007bff?text=T" alt="Twitter">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="https://via.placeholder.com/24/007bff?text=I" alt="Instagram">
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <img src="https://via.placeholder.com/24/007bff?text=L" alt="LinkedIn">
                </a> --}}
            </div>
        </div>
    </div>
</body>

</html>
