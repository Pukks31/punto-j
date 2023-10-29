<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/unab.png') }}" alt="logo">
        </div>
        <div class="logout">
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <button class="button-orange" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button class="button-orange" onclick="window.open('https://tema.unab.edu.co/login/index.php?testsession=5254', '_blank')">Ir a Tema UNAB</button>
        <button class="button-orange" onclick="window.open('https://cosmos.unab.edu.co/', '_blank')">Ir a Cosmos UNAB</button>
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
</body>
</html>
