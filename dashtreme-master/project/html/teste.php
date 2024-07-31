<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Funcionários</title>
    <style>
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .popup-content {
            position: relative;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }
        .resultados {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <button id="open-popup">Abrir Popup</button>
    <div id="popup" class="popup">
        <div class="popup-content">
            <button id="close-btn" class="close-btn">&times;</button>
            <h2>Equipe</h2>
            <p>Adicione funcionários a este serviço</p>
            <input type="text" id="nome" name="nome" placeholder="Pesquise nomes ou equipe">
            <div id="resultados" class="resultados"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const openPopupBtn = document.getElementById('open-popup');
    const closePopupBtn = document.getElementById('close-btn');
    const popup = document.getElementById('popup');
    const nomeInput = document.getElementById('nome');
    const resultadosDiv = document.getElementById('resultados');

    openPopupBtn.addEventListener('click', () => {
        popup.style.display = 'block';
    });

    closePopupBtn.addEventListener('click', () => {
        popup.style.display = 'none';
    });

    nomeInput.addEventListener('input', function() {
        const query = nomeInput.value;
        if (query.length > 0) {
            fetch(`buscar_funcionarios.php?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    resultadosDiv.innerHTML = '';
                    data.forEach(funcionario => {
                        const div = document.createElement('div');
                        div.textContent = funcionario.nome_funcionario;
                        resultadosDiv.appendChild(div);
                    });
                });
        } else {
            resultadosDiv.innerHTML = '';
        }
    });
});

    </script>
</body>
</html>
