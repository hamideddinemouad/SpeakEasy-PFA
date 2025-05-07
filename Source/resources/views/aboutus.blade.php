<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - SpeakEasy Academy</title>
    <!-- Include Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {},
        },
      }
    </script>
</head>
<body class="bg-[#F5F5F5] font-sans">


     <x-Header />

    <!-- Main Content -->
    <main class="container mx-auto py-16 px-4">
        <h1 class="text-4xl font-bold text-[#002D62] mb-8">À Propos de SpeakEasy Academy</h1>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Notre Mission</h2>
            <p class="text-gray-700 opacity-75 leading-relaxed">
                Chez SpeakEasy Academy, notre mission est de rendre l'apprentissage des langues accessible, engageant et efficace pour tous. Nous croyons que la maîtrise d'une langue ouvre des portes vers de nouvelles cultures, de nouvelles opportunités et une meilleure compréhension du monde.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Notre Vision</h2>
            <p class="text-gray-700 opacity-75 leading-relaxed">
                Nous aspirons à être la plateforme d'apprentissage linguistique de référence, reconnue pour son approche personnalisée, ses ressources de qualité et sa communauté d'apprenants passionnés.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Nos Valeurs</h2>
            <ul class="list-disc list-inside text-gray-700 opacity-75 leading-relaxed">
                <li><strong>Accessibilité :</strong> Rendre l'apprentissage linguistique abordable et accessible à tous.</li>
                <li><strong>Personnalisation :</strong> Offrir des parcours d'apprentissage adaptés aux besoins individuels.</li>
                <li><strong>Innovation :</strong> Utiliser des technologies de pointe pour améliorer l'expérience d'apprentissage.</li>
                <li><strong>Communauté :</strong> Créer une communauté d'apprenants et d'enseignants passionnés.</li>
                <li><strong>Qualité :</strong> Fournir des ressources éducatives de haute qualité.</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Notre Équipe</h2>
            <p class="text-gray-700 opacity-75 leading-relaxed">
                SpeakEasy Academy est composée d'une équipe de linguistes, de pédagogues et de développeurs passionnés, tous unis par la conviction que l'apprentissage des langues peut transformer des vies.
            </p>
        </section>
    </main>

    <!-- Footer (Same as Homepage) -->
    <footer class="bg-[#001F3F] text-[#F5F5F5] py-6 text-center">
        <p>&copy; 2024 SpeakEasy Academy</p>
    </footer>

</body>
</html>