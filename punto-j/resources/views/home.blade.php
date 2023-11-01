<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/unab.png') }}" alt="logo" style="max-width: 100px; margin-right: 10px;">
        </div>
        <div class="logout">
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <button class="button-logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    
    <div class="welcome-message">
        <h1><span id="typed-text"></span></h1>
    </div>
    
    <div class="centered-buttons">
        <button class="button-cosmos" onclick="window.open('https://cosmos.unab.edu.co/', '_blank')">Ir a Cosmos UNAB</button>
        <button class="button-tema" onclick="window.open('https://miportalu.unab.edu.co/index.php?mensaje=usuarioInvalido&url=/modulos/ReservaEspaciosdeportivosyculturales/', '_blank')">Ir a Mi Portal U</button>
    </div>  
    
    <!-- Agrega el script del asistente de Watson aquí -->
    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "0c843e55-d8a3-4cf8-8a0a-32d03b99d63d", // The ID of this integration.
            region: "au-syd", // The region your integration is hosted in.
            serviceInstanceID: "5996cc94-47d8-46f8-ab7a-8e773e3aea92", // The ID of your service instance.
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
                    setTimeout(typeWriter, 50); // Ajusta la velocidad de escritura aquí
                }
            };

            setTimeout(typeWriter, 2000); // Agrega un retraso de 2 segundos antes de comenzar a escribir el mensaje
        });
    </script>
</body>
</html>