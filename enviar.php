<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentoria Acadêmica | Excelência em Produção Científica</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.03);
        }
        .service-card {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Contato com envio para PHP -->
    <section id="contato" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <form action="enviar.php" method="POST" class="bg-gray-50 p-8 rounded-xl shadow-md">
                        <div class="mb-6">
                            <label for="nome" class="block text-gray-700 font-medium mb-2">Nome Completo</label>
                            <input type="text" name="nome" id="nome" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" name="email" id="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div class="mb-6">
                            <label for="servico" class="block text-gray-700 font-medium mb-2">Serviço de Interesse</label>
                            <select name="servico" id="servico" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option value="">Selecione um serviço</option>
                                <option value="trabalhos">Trabalhos Científicos & Relatórios</option>
                                <option value="projetos">Projetos Acadêmicos & Científicos</option>
                                <option value="monografias">Monografias & Dissertações</option>
                                <option value="tcc">TCC com Orientação Personalizada</option>
                                <option value="digitacao">Digitação & Tradução de Documentos</option>
                                <option value="curriculos">Currículos & Cartas de Apresentação</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="mensagem" class="block text-gray-700 font-medium mb-2">Mensagem</label>
                            <textarea name="mensagem" id="mensagem" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                        </div>
                        <button type="submit" class="gradient-bg text-white px-8 py-3 rounded-lg font-semibold w-full hover-scale">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
