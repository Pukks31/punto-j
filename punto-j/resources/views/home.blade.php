<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    <!-- Agrega el enlace a Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="home-page bg-dark">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/unab.png') }}" alt="logo" style="max-width: 100px; margin-right: 10px;">
        </div>
        <div class="logout">
            <!-- Reemplaza el botón de cerrar sesión por un icono de Font Awesome -->
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> <!-- Icono de cerrar sesión -->
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    
    <div class="welcome-message">
        <h1><span id="typed-text"></span></h1>
    </div>
    
    <div class="centered-buttons">
        <!-- Estilos personalizados para los botones "Cosmos" y "Mi Portal U" -->
        <a class="button-cosmos" href="https://cosmos.unab.edu.co/" target="_blank">Ir a Cosmos UNAB</a>
        <a class="button-tema" href="https://miportalu.unab.edu.co/index.php?mensaje=usuarioInvalido&url=/modulos/ReservaEspaciosdeportivosyculturales/" target="_blank">Ir a Mi Portal U</a>
    </div>  
    
    <!-- script del asistente de Watson -->
    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "0c843e55-d8a3-4cf8-8a0a-32d03b99d63d", 
            region: "au-syd", 
            serviceInstanceID: "5996cc94-47d8-46f8-ab7a-8e773e3aea92", 
            onLoad: function(instance) { instance.render(); }
        };
        setTimeout(function(){
            const t=document.createElement('script');
            t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
            document.head.appendChild(t);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const message = "Bienvenido, {{ $userName }}, soy Punto J, tu asistente virtual.<br>¿En qué puedo ayudarte?";
            const typedText = document.getElementById('typed-text');
            let charIndex = 0;

            const typeWriter = () => {
                if (charIndex < message.length) {
                    if (message.charAt(charIndex) === "<") {
                        const endIndex = message.indexOf(">", charIndex);
                        typedText.innerHTML += message.slice(charIndex, endIndex + 1);
                        charIndex = endIndex + 1;
                    } else {
                        typedText.innerHTML += message.charAt(charIndex);
                        charIndex++;
                    }
                    setTimeout(typeWriter, 50); 
                }
            };

            setTimeout(typeWriter, 2000); 
        });
    </script>
</body>
</html>
