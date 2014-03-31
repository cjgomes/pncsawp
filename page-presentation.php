<?php
/**
 *Template Name: Página de apresentação
**/
get_header();
?>
<script>
    jQuery(document).ready(function ($) {
        //Ações dos icones 
        $('.brazil-language').click(function () {
            $('.alemao-about, .england-about, .france-about, .italian-about, .japan-about, .spanish-about').css('display','none');
            $('.brazil-about').fadeIn('slow');
        });
        
        $('.alemao-language').click(function () {
            $('.brazil-about, .england-about, .france-about, .italian-about, .japan-about, .spanish-about').css('display','none');
            $('.alemao-about').fadeIn('slow');
        });
        
        $('.england-language').click(function () {
            $('.brazil-about, .alemao-about, .france-about, .italian-about, .japan-about, .spanish-about').css('display','none');
            $('.england-about').fadeIn('slow');
        });
        
        $('.france-language').click(function () {
            $('.brazil-about, .alemao-about, .england-about, .italian-about, .japan-about, .spanish-about').css('display','none');
            $('.france-about').fadeIn('slow');
        });
        
        $('.italian-language').click(function () {
            $('.brazil-about, .alemao-about, .france-about, .england-about, .japan-about, .spanish-about').css('display','none');
            $('.italian-about').fadeIn('slow');
        });
        
         $('.japan-language').click(function () {
            $('.brazil-about, .alemao-about, .france-about, .england-about, .italian-about, .spanish-about').css('display','none');
            $('.japan-about').fadeIn('slow');
        });

        $('.spanish-language').click(function () {
            $('.brazil-about, .alemao-about, .france-about, .england-about, .italian-about, .japan-about').css('display','none');
            $('.spanish-about').fadeIn('slow');
        });
    });    
</script>

<div id="primary" class="background content">
    
        <div class="content">
            <div class="row">
                <div class="table">
                <ul class="flag-list">
                    <li class="flag-icon-li brazil-language"><img src="<?php echo get_template_directory_uri(); ?>/images/languages/brazil.png" /></li>
                    <li class="flag-icon-li alemao-language"><img src="<?php echo get_template_directory_uri(); ?>/images/languages/alemao.png" /></li>
                    <li class="flag-icon-li england-language"><img src="<?php echo get_template_directory_uri(); ?>/images/languages/england.png" /></li>
                    <li class="flag-icon-li france-language"><img src="<?php echo get_template_directory_uri(); ?>/images/languages/france.png" /></li>
                    <li class="flag-icon-li italian-language"><img src="<?php echo get_template_directory_uri(); ?>/images/languages/italian.png" /></li>
                    <li class="flag-icon-li japan-language"><img src="<?php echo get_template_directory_uri(); ?>/images/languages/japan.png" /></li>
                    <li class="flag-icon-li spanish-language"><img src="<?php echo get_template_directory_uri(); ?>/images/languages/spain.png" /></li>
                </ul>
                </div>
                <hr />
                <div class="app-content brazil-about">
                    <div class="flag-content-header table">
                    <img class="flag-content-icon" src="<?php echo get_template_directory_uri(); ?>/images/languages/brazil.png" />
                    <div class="flag-content-title">
                    <h1>Apresentação do Projeto Nova Cartografia Social em português do Brasil</h1>
                    </div>
                    </div>
                    <div class="flag-content-text">
                    <p>O Projeto Nova Cartografia Social da Amazônia (PNCSA) tem como objetivo dar ensejo à auto-cartografia dos povos e comunidades tradicionais na Amazônia. Com o material produzido, tem-se não apenas um maior conhecimento sobre o processo de ocupação dessa região, mas sobretudo uma maior ênfase e um novo instrumento para o fortalecimento dos movimentos sociais que nela existem. Tais movimentos sociais consistem em manifestações de identidades coletivas, referidas a situações sociais peculiares e territorializadas. Estas territorialidades específicas, construídas socialmente pelos diversos agentes sociais, é que suportam as identidades coletivas objetivadas em movimentos sociais. A força deste processo de territorialização diferenciada constitui o objeto deste projeto. A cartografia se mostra como um elemento de combate. A sua produção é um dos momentos possíveis para a auto-afirmação social. É nesse sentido que o PNCSA busca materializar a manifestação da auto-cartografia dos povos e comunidades nos fascículos que publica, que não só pretendem fortalecer os movimentos, mas o fazem mediante a transparência de suas expressões culturais diversas.</p>
<p>Cada fascículo é resultado de uma relação social específica entre um povo ou comunidade tradicional e a equipe de pesquisadores. É o movimento social que busca o PNSCA para realizar a cartografia. A partir desse interesse manifesto, é realizada uma oficina de mapas com a participação de cerca de 30 agentes sociais e os pesquisadores membros do Projeto. Nela, os pesquisadores ensinam técnicas de GPS e de mapeamento, além de conversar com os agentes e coletar depoimentos sobre a história social e problemas da comunidade. Os agentes sociais produzem croquis, mapeando sua região e indicando quais os elementos relevantes para a sua composição. Em um segundo momento, sem a presença dos pesquisadores, os agentes sociais marcam, com GPS, os pontos do que consideram significativo de seu território. Na seqüência, o PNSCA recolhe as informações das marcações de ponto e as georeferencia na base cartográfica, inserindo as ilustrações produzidas nos croquis. Essas ilustrações compreendem desenhos, esboços e reproduções de símbolos e objetos (remos, casas, embarcações, instrumentos de trabalho, animais, plantas, etc.) que são transformados, a partir do trabalho da equipe de pesquisadores, em ícones para compor as legendas dos mapas. Simultaneamente, transcreve-se excertos de depoimentos e seleciona-se os que comporão o fascículo.</p>
<p>Com o mapa concluído e os depoimentos selecionados, monta-se um protótipo de fascículo, que é remetido à comunidade. Ela então faz as correções que deseja, procede à leitura do mapa-piloto e envia-o de volta ao PNCSA. A partir daí toma-se as providências concernentes à publicação. São publicadas mil cópias de cada fascículo. Um menor número de cópias fica em mãos do PNCSA, que guarda alguns exemplares e distribui os restantes para pesquisadores, núcleos de pesquisa, universidades e órgãos estatais tais como Ministério Público Federal e Procuradoria da República. A maior parte dos exemplares fica de posse do movimento social, e por ele é utilizada como quiser, muitas vezes como parte integrante de sua estratégia de auto-afirmação social e de resolução de seus problemas O Projeto Nova Cartografia Social da Amazônia produziu um total de setenta fascículos, organizados em seis séries, referentes ao trabalho das três primeiras etapas de pesquisa, entre março de 2005 e janeiro de 2009. Produziu também 13 livros e um mapa (síntese referente à área ecológica dos babaçuais).</p>
<p>A tiragem total dos fascículos corresponde a 85.000 exemplares, a dos livros (desde 2005), a 13.000 exemplares, e, a dos mapas, a 7.400 exemplares.</p>
<p>Este tipo de cartografia social vem se consolidando desde as experiências de mapeamento social realizadas na área correspondente ao “Programa Grande Carajás”, em 1991-93, e na região ecológica de babaçuais, em 2005. O primeiro mapeamento resultou no livro-mapa intitulado Guerra dos Mapas (1993), e, o segundo, no Guerra Ecológica nos Babaçuais(2005).</p>
<p>Em 2005 foram publicados os seis primeiros fascículos da série 1, chamada Movimentos Sociais, Identidades Coletivas e Conflitos, com a proeminência das Quebradeiras de Coco Babaçu dos Estados do Piauí, Maranhão e Pará. No final de 2005 as oficinas de mapas das Comunidades Quilombolas dos Estados do Pará, Maranhão, e Amazonas passam a integrar a mesma série, com seus fascículos publicados entre 2006 e 2007. Ainda na série 1 consta os trabalhos relativos a artesãos e artesãs, ribeirinhos, ribeirinhas, piaçabeiros e peconheiros dos Estados do Amazonas e Pará.</p>
<p>Em 2006 o Projeto expandiu os trabalhos de mapeamento social para fora da Amazônia com a série 2, intitulada Projeto Nova Cartografia Social dos Povos e Comunidades Tradicionais do Brasil. Entre os anos de 2006 e 2007 foram publicados 10 fascículos, focalizando a diversidade social, a saber: Povos dos Faxinais, Fundos de Pasto, Quilombolas, Pescadores, Ribeirinhos, Cipozeiros e Povoado Pantaneiro, nos Estados do Paraná, Bahia, Pará, Amazonas, Roraima, Pernambuco, Espírito Santo, Santa Catarina e Mato Grosso.</p>
<p>A série 3, Conflitos nas Cidades da Amazônia, começou no ano de 2006, e conta com dez trabalhos realizados na cidade de Belém (Indígenas, Homossexuais, Afro-religiosos, Negras e Negros, Catadores, Pessoas com deficiências, Feirantes e Ribeirinhos) e nove na cidade de Manaus (Bairro Campo Sales, Jesus Me Deu, Comunidade Parque Riachuelo I, Parque Riachuelo II, Parque São Pedro, São Benedito da Praça 14 de Janeiro, Mulheres Indígenas e Artesãs do Alto Rio Negro, Comunidade Indígena Sateré-Mawé, Beco dos Pretos – Morro da Liberdade). Há ainda fascículos produzidos nas cidades de Salinas (PA), Rio Preto da Eva (AM), Manacapuru (AM) e Marabá (PA). Em 2008 foram criadas três novas séries, as de número 4, 5 e 6. A série 4 se chama Crianças e adolescentes em Comunidades Tradicionais da Amazônia e conta com dois fascículos, “Crianças e Adolescente Ribeirinhos e Quilombolas de Abaetetuba” e “Jovens de Comunidade Tradicionais do Baixo Tocantins: Cametá, Limoeiro do Ajuru, Igarapé Miri, Mocajuba”. A série 5, intitulada Faxinalenses no sul do Brasil possui cinco publicações: “Faxinalenses: Fé, Conhecimentos Tradicionais e Práticas de Cura”, “Faxinalenses no setor Centro do Paraná”, “Faxinalenses no setor Sul do Paraná”, “Faxinalenses no setor Metropolitano de Curitiba” e "Faxinalenses do Núcleo Metropolitano Sul de Curitiba". A sexta e última série se chama Quilombolas do Sul do Brasil, possui três publicações: "Comunidade Invernada Paiol de Telga Fundão", “Comunidade Quilombola João Surá e Praia do Peixe” e "Comunidade Quilombola do Rocio: Adelaide Maria Trindade Batista, Castorina maria da Conceição e Tobias Ferreira".</p>
<p>O mapa-guia Áreas mapeadas a partir das oficinas de mapas do Projeto Nova Cartografia Social da Amazônia mostra a espacialização das áreas mapeadas pelos povos e comunidades tradicionais participantes das oficinas de mapas e que estão publicadas nos fascículos das diferentes séries. São também apresentados no mapa alguns detalhes sobre os fascículos das séries 1 e 2 do Projeto.</p>
<p>A equipe de colaboradores do PNCSA é composta por 19 doutores (em Antropologia, Direito, Geografia, Biologia, Sociologia e História), 14 doutorandos, 22 mestres, 16 mestrandos, 7 especialistas 12 bacharéis e 10 bacharelandos. Participaram das oficinas de mapas mais de 1.800 agentes sociais entre março de 2005 e janeiro de 2009, mapeando seus respectivos movimentos sociais e reafirmando suas territorialidades específicas.</p>
                    </div>
                </div>
                <div class="app-content alemao-about">
                    <div class="flag-content-header table">
                    <img class="flag-content-icon" src="<?php echo get_template_directory_uri(); ?>/images/languages/alemao.png" />
                    <div class="flag-content-title">
                    <h1>Präsentation auf Deutsch</h1>
                    </div>
                    </div>
                    <div class="flag-content-text">
                    <p>Ziel des Projektes „Projeto Nova Cartografia Social da Amazonia" (PNCSA) (Neue Sozio-Kartographie Amazoniens) ist es, den traditionellen Völkern die und Gemeinden Amazoniens die eigenständige kartographische Erfassung ihrer</p>
<p>Lebensräume zu ermöglichen. Das so entstandene Kartenmaterial trägt nicht nur zu einem besseren Verständnis der Besiedelung der Region bei, sondern ist vielmehr ein neues Instrument, das die örtlichen sozialen Bewegungen stärkt. Diese lokalen sozialen Bewegungen sind Äußerungen der Kollektividentität, die sich aufgrund einer bestimmten sozialen Situation in einem bestimmten Territorium bildet. Die spezifische Beziehung zum Territorium, ist das Fundament der Kollektividentität, die erforderlich für die lokale soziale Bewegung ist. Der Sinn des Projektes ist die die Kraft, die in diesem differenzierten Prozess der Territoriumsbestimmung entsteht aufzuzeigen. Die Kartographie ist dabei ein Instrument im Kampf zur sozialen Selbstbestimmung. In diesem Sinne versucht das PNSCA mittels Publikationen von Broschüren die Aussagen, die aus dieser eigenständigen kartographischen Erfassung der Lebensräume der traditionellen Völker und Gemeinden entstehen, sichtbar zu machen. Absicht dieser Publikationen ist es durch Transparenz der diversen kulturellen Ausdrucksformen, die lokalen sozialen Bewegungen zu stärken.</p>
<p>Jede einzelne Broschüre ist das Ergebnis einer spezifischen sozialen Beziehung zwischen einem traditionellem Volk oder Gemeinde und dem Forscherteam. Repräsentanten der lokalen sozialen Bewegung nehmen mit dem PNSCA Kontakt auf, um die kartographische Erfassung ihrer Gebiete zu konkretisieren. Nach dieser Kontaktaufnahme und Interessenbekundung, wird eine kartographische Werkstatt, mit Beteiligung von ca. 30 Vertretern der Bewegung und dem Forscherteam des Projektes errichtet. In dieser kartographischen Werkstatt unterrichten die Forscher GPS- und Kartierungstechniken, sprechen mit den Vertretern der Bewegung, sammeln Aussagen betreffend ihrer Sozialgeschichte und Probleme der Gemeinde.</p>
<p>Die Repräsentanten stellen Kartierungsentwürfe des Gebietes her, wobei sie jene Elemente, die ihrer Meinung nach bedeutend für die Kartierung sind, hervorheben. In einem weiteren Schritt und ohne die Beteiligung der Forscher, bestimmen sie nun mit Hilfe des GPS die Punkte, die für sie von Relevanz für die Positionierung ihres Gebietes sind. In der Folge, sammelt das PNSCA die Daten aus den einzelnen Punktbestimmungen und fügt diese als Georeferenz in die Grundkarte ein,</p>
<p>wobei die Zeichnungsillustrationen der Karten-Entwürfe mit eingefügt werden. Diese Illustrationen bestehen aus Zeichnungen, Entwürfe, Symbol- und Objektdarstellungen (Ruder, Häuser, Boote, Werkzeuge, Tiere, Pflanzen, etc.), welche als Symbole bei der Zusammenstellung der Legende verwendet werden. Parallel dazu, werden Auszüge aus den Aussagen transkribiert und jene ausgewählt, die in den Broschüren publiziert werden. Nach Fertigstellung der Karte und Auswahl der Texte, wird ein vorläufiges Exemplar erstellt und an die jeweilige Gemeinde geschickt. Dort wird es der Gemeinde vorgestellt und anschließend überarbeitet. Erst danach erfolgt die Publikation. Es werden von jeder Broschüre 1000 Kopien erstellt. Ein kleiner Teil davon bleibt in Händen des PNSCA, das einige Exemplare archiviert. Die restlichen Broschüren werden an Forschern, Universitäten, öffentliche Einrichtungen wie Ministerien, Staatsanwaltschaft und Bundesbehörden verteilt.</p>
<p>Der Großteil der Broschüren verbleibt jedoch bei den örtlichen sozialen Bewegungen, die frei darüber verfügen können, häufig auch als Teil ihrer Selbstbestimmungsstrategie und zur Lösung ihrer Probleme. Das Projekt hat insgesamt 70 Broschüren erstellt, die in sechs Reihen geordnet sind. Zwischen März 2005 und Januar 2009 wurden die Arbeiten der drei ersten Forschungsetappen des Projektes, herausgegeben. Weiters konnten bereits 13 Bücher und eine Gesamtkarte (Synthese des ökologischen Gebietes der Kokos-Babassupalme) publiziert werden. Die Gesamtauflage der Broschüren betragen insgesamt 85.000 Exemplare; die Auflage der Bücher seit 2005, 13.000 und die der Karten 7.400 Exemplare.</p>
<p>Diese Art der kartografischen Erfassung hat sich, seitdem es Erfahrungen über Sozio-Kartografie in den Gebieten „Grandes Carajas" in den Jahren 1991 bis 1993, sowie im ökologischen Gebiet der Kokos-Babassupalme gemacht wurden, bewährt. Die erste Kartierungsarbeit ergab das Buch „Guerra dos Mapas", publiziert in 1993; aus der zweiten Arbeit, wurde in 2005 „Guerra Ecológica nos Babaçuais" publiziert.</p>
<p>2005 wurden die ersten sechs Broschüren der 1. Reihe: „Movimentos Sociais, Identidades Coletivas e Conflitos" (Soziale Bewegungen, Kollektividentitäten und Konflikte) mit dem Schwerpunkt der Kokosbabassu- Sammlerinnen im Bundesstaat Piaui, Maranhão und Pará publiziert. Diese 1. Reihe wurde 2005 mit den Arbeiten der kartografischen Werkstätte der Quilombolas Gemeinden im Bundesstaat Pará, Maranhão und Amazonas erweitert. Die Broschüren wurden zwischen 2006 und 2007 publiziert. In einer weiteren Folge wurde diese 1. Reihe mit Arbeiten betreffend Handwerker und Handwerkerinnen, Flussbewohner und Flussbewohnerinnen, Piaçabeiros (Handwerker die Produkte aus Fasern der aus Piaçaba herstellen, wie Bürsten, Besen, etc) und Peconheiros (Handwerker die Produkte aus Palmenfasern herstellen) in den Bundesstaaten Amazonas und Pará, ergänzt. Die 2. Reihe: „Projeto Nova Cartografia Social dos Povos e Comunidades Tradicionais do Brasil" (Projekt Neue Sozio-Kartografie der Traditionellen Völker und Gemeinden Brasiliens) aus 2006, erweiterte die Kartierungsgebiete auf Regionen außerhalb Amazoniens. Zwischen den Jahren 2006 und 2007 wurden insgesamt 10 Broschüren herausgegeben, welche die Sozio-Diversität der Bevölkerung der Bundesstaaten Paraná, Bahia, Pará, Amazonas, Roraima, Pernambuco, Espirito Santo, Santa Catarina, Mato Grosso, fokussieren. (Bewohner der „Faxinais", Hirten, Quilombolas, Fischer, Flussbewohner, Cipozeiros" und jene der Sumpfgebiete). 2006 wurde die 3. Reihe gestartet: „Conflitos nas Cidades da Amazonia" (Konflikte in den Städten Amazoniens). Diese Reihe beinhaltet 10 Arbeiten betreffend die Stadt Belém (über Indigene Bevölkerung, Homosexuelle, Anhänger Afrikanischer Religionen, Schwarze, Müllsammler, Menschen mit Behinderungen, Markthändler und Flussbewohner) und 9 Arbeiten betreffend die Stadt Manaus (Bairro Campo Sales, Jesus Meu Deus, Comunidade Parque Riachuelo II, Parque Sao Pedro, Sao Benedito da Praça 14 de Jameiro, sowie Indigene Frauen und Handwerkerinnen des Rio Alto Negro, Comunidade Indigena Sateré-Mawé, Beco dos Pretos, - Morro da Liberdade). Weiters wurden Broschüren über die Städte: Salinas (Pará), Rio Preto da Eva (Amazonas), Manacapuru (Amazonas) und Marabá (Amazonas), publiziert.</p>
<p>2008 kamen drei neue Reihen (4., 5. und 6. Reihe) dazu. Reihe 4 betrifft Kinder und Jugendliche in den traditionellen Gemeinden Amazoniens und beinhaltet 2 Broschüren: „Crianças e Adolescentes Ribeirinhos e Quilombolas de Abaetetuba" (Kinder und Jugendliche Flussbewohner und Quilombolas aus Abaetetuba) und „Jovens de Comunidades Tradicionais do Baixo Tocantins: Cametá, Limoeiro do Aruju, Igarapé Mirim Mocajuba" (Jugend aus traditionellen Gemeinden des Baixo Tocantins). Reihe 5: „Faxinalenses no Sul do Brasil" (Faxinalensen im Süden Brasiliens) betrifft die Landbewohner Paranás. Sie beinhaltet 4 Publikationen: „Faxinalenses: Fé, Conhecimentos Tradicionais e Prática de Cura" (Faxinalensen: Glaube, Traditionelles Wissen und Heilpraktiken) „Faxinalenses no setor Sul do Paraná" (Faxinalensen des Sektor Süden Paranas) und „Faxinalenses no setor Metropolitano de Curitiba" (Faxinalensen im Städtischen Sektor in Curitiba). Die 6. und letzte Reihe trägt den Titel „Paraná" und beinhaltet derzeit 1 Broschüre: „Comunidade Quilombola Joao Surá e Praia do Peixe". In der Gesamtkarte: „Areas mapeadas a partir das oficinas de mapas do Projeto Nova Cartografia Social da Amazonia" (Kartierte Gebiete aus den kartographischen Werkstätten des Projektes Neue Sozio-Kartographie Amazoniens) wird die Georeferenz, betreffend die von den traditionellen Völker und Gemeinden in den kartographischen Werkstätten erfassten Gebiete, welche in den Broschüren der diversen Reihen publiziert wurden, dargestellt. In dieser Karte werden auch einige Details bezüglich der Broschüren der 1. und 2. Reihen vorgestellt. Das Forschungsteam des PNSCA besteht aus 19 Wissenschaftlern mit Doktorat aus den Fächer, Anthropologie, Jus, Geographie, Biologie, Soziologie und Geschichte; 14 Doktoranden, 22 Magister, 16 Diplomanden, 7 Fachspezialisten, 12 Bakkalaureus und 10 Bakkalaureus-Studierende.</p>
<p>Über 1800 Repräsentanten der traditionellen Völker und Gemeinden haben im Zeitraum zwischen März 2005 und Jänner 2009 in den kartographischen Werkstätten mitgearbeitet, ihr Lebensraum kartografisch erfasst und somit ihre spezifische Beziehung zum Territorium von neuem bestätigt.</p>
                    </div>
                </div>
                <div class="app-content england-about">
                    <div class="flag-content-header table">
                    <img class="flag-content-icon" src="<?php echo get_template_directory_uri(); ?>/images/languages/england.png" />
                    <div class="flag-content-title">
                    <h1>Presentation in English</h1>
                    </div>
                    </div>
                    <div class="flag-content-text">
                    <p>The objective of the project "New Social Cartography of the Amazon" (PNCSA – Projeto Nova Cartografia Social da Amazonia) is the self-mapping of the traditional peoples and communities in the Amazon region. The material produced by the project furnishes greater knowledge about the process of occupation of the Amazon and, above all, a greater emphasis on and a new instrument for the strengthening of the social movements that exist here. These social movements consist of expressions of collective identity referring to particular and territorialized social situations. These specific territorialities, socially constructed by diverse social agents, sustain the collective identities objectified in social movements. The strength of this differentiated territorialization process constitutes the object of this project. Cartography appears as an element of combat. Its production is one of the possible moments of social self-affirmation. In this sense the PNCSA tries to materialize the manifestation of self-mapping by the peoples and communities in the brochures it publishes, meaning not only to strengthen the movements, but to do so through their own diverse cultural expressions.</p>
<p>Each brochure is the result of a specific social relationship between a traditional people or community and a team of researchers. The initiative in the mapping process belongs to the social movement, which comes to the PNCSA to request the crafting of the map. Following this manifest interest, a map workshop is undertaken with the participation of about thirty social agents and the research members of the Project. During the workshop, researchers teach GPS and mapping techniques, talk to the social agents and collect testomonies about the social history and problems of the community. The social agents produce layouts depicting their region, and specify which elements are relevant for map rendering. Subsequently, without the researchers´ presence, the social agents pin down the GPS points of their territory that they consider meaningful.</p>
<p>Next, the PNCSA receives these GPS points and geo-references them on the cartographic base, inserting the illustrations which were produced in the initial layout. These illustrations include drawings, sketches and reproductions of symbols and objects (paddles, houses, boats, work instruments, animals, plants, etc) that are transformed into icons that compose the map. At the same time, excerpts of testimonies are transcribed and selected to make up the brochure. With the map and the selected excerpts, the brochure´s prototype is put together and sent to the community, which then makes the corrections it desires, reads the map through and sends the protoype back to the PNCSA. From this point on, publication is undertaken. One thousand copies of each brochure are printed. The PNSCA keeps a small number of copies, sending several to researchers, research centers, universities and state organisms such as the Ministério Público Federal and the Procuradoria da República. The majority of copies of each brochure are kept by the social movement itself, which uses them at will – often as an integral part of its social self-affirmation and problem-solving strategies.</p>
<p>* * *</p>
<p>From March 2005 to January 2009 the New Social Cartography of the Amazon Project produced forty-nine brochures, organized in three series, corresponding to the Project´s first stages. Seven books and one map – syntheses referring to babaçu palm (Attalea speciosa, formerly Orbignya phalerata) eco-region. Each brochure is the result of a combination of collaborative efforts and relationships between a community or traditional group and the research team. The relationships form and are strengthened during the mapping exercises and result in the publication of social maps and brochures. The research team is composed of 15 Ph.D.´s (Anthropology, Law, Geography, Biology, Sociology, History), 11 doctoral students, 4</p>
<p>Master´s, 12 Master´s students, 4 Bachelor´s, and 10 Bachelor´s students. This type of participatory cartography is the result of previous social mapping exercises conducted in the area corresponding to the Greater Carajás Program, in 1991-1993, and in the eco-region characterized by the babaçu palm (babaçuais), in 2005. The first experience resulted in the publication of the book-map "War of the Maps" and the second in the book-map "Ecological War in the Babaçuais". So far, the project has printed 70,000 copies of the series of brochures, 9,000 copies of the two books, and 7,400 copies of the two maps. In 2005 the first six brochures were published from the Series "Social Movements, Collective Identity, and Conflicts" with the Babaçu Palm Nut Collectors (Quebradeiras de Coco Babaçu) from the states of Piauí, Maranhão, and Pará. Towards the end of 2005 mapping workshops, also part of Series 1, began in Quilombola communities in Pará, Maranhão, and Amazonas. The brochures from these workshops were published in 2006 and 2007. Publications regarding Artesans, Riverine peoples (ribeirinhos), piaçaba (Leopoldinia piaçaba) collectors (piaçabeiros), and peconheiros from Amazonas and Pará were also produced for Series 1.</p>
<p>In 2006 the Project expanded its mapping workshops to include areas outside of the Amazon in Series 2, "New Social Cartography Project of Traditional Peoples and Communities of Brazil". Ten brochures describing the social mapping efforts of the</p>
<p>People of the Faxinais, People of the Fundos de Pasto, Quilombolas, Fisherpeople, Riverine People, Vine collectors (Cipozeiros), and People of the Pantanal from the states of Paraná, Bahía, Pará, Amazonas, Roraima, Pernambuco, Espírito Santo, Santa Catarina, and Mato Grosso were published in 2006.</p>
<p>Series 3, "Conflicts in the Cities of the Amazon", began in 2006 and includes ten publications from the City of Belém (Indigenous Peoples, Homosexuals, Afro-religious groups, Blacks, Catadores, People with disabilities, Feriantes, and Riverine Peoples) and eight from the City of Manaus (Neighborhoods of Campo Sales, Jesus me Deu, Parque Riachuelo I, Parque Riachuelo II, Parque São Pedro, São Benedito da Praça 14 de Janeiro, Indigenous Women and Artesans of the Upper Rio Negro, Indigenous Community Sateré-Mawé).</p>
<p>The map "Areas Mapped as a Result of New Social Cartography of the Amazon Project Mapping Workshops" shows the spatialization of the areas mapped by the traditional peoples and communities participating in the workshops and published in the brochures of the different series. Some details regarding the brochures from Series 1 and 2 of the project are also presented in the map. Between March 2005 and January 2009 more than 1,800 social agents participated in the workshops, mapping out their respective social movements and reaffirming their specific territories.</p>
                    </div>
                </div>
                <div class="app-content france-about">
                    <div class="flag-content-header table">
                    <img class="flag-content-icon" src="<?php echo get_template_directory_uri(); ?>/images/languages/france.png" />
                    <div class="flag-content-title">
                    <h1>Présentation en français</h1>
                    </div>
                    </div>
                    <div class="flag-content-text">
                    <p>Le Projet Nouvelle Cartographie Sociale de l´Amazonie (PNCSA) a comme objetif faire lieu à l´autogartographie des peuples et communautés traditionels de l´Amazonie. Avec le materiel qu´il produit, il y a non seulement une plus grande</p>
<p>connaisance sur le procès d´ocupation de la région, mais surtout un accent plus grand et un nouvel instrument pour le renforcement des mouvements sociaux qui y existent. Ces mouvements sociaux consistent en manifestations d´identitées colectives, referées à situations sociales peculiaires et territorializées. Cettes territorializées specifiques, construites socialment pour les agents sociaux divers, sont celles qui supportent les identitées colectives objetivées en mouvements sociaux. La force de ce procès de territoralization diferencié constitu l´objet de ce projet. La cartographie se montre comme un élement de combat. As production est l´um des moments possibles pour l´auto-afirmation sociale. C´est dans ce sens que le PNCSA cherche materialisé la manifestation de l´auto-cartographie des peuples et communautés dans les fascicules qu´il publie, qui veulent pas seulement renforcer les mouvements, mais le fonts par la tranparence de leurs expressions culturelles diverses.</p>
<p>Chaque fascicule est le résultat d´une relation social specifique entre un peuple ou communauté traditionelle et l´equipe de chercheurs. C´est le mouvement social qui cherche le PNSCA pour realiser la cartographie. À partir de cet ìnterêt manifest, c´est realizé um atelier de cartes avec la participation d´environ 30 agents sociaux et les chercheurs integrants du Projet. Lá, les chercheurs enseignt técniques de GPS et de cartogaphie, em plus de parler avec les agents sociaux et prendre des témoignages sur l´histoire sociale et les próblémes de la communauté. Les agents sociaux produisent des croquis, cartographiant leur région et indicant les élements rélevants pour as composition. Dans un deuxième moment, sans la présence des chercheurs, les agents sociaux marquent, avec le GPS, les points de ce qu´ils considerents significatif de son territoire. En séquence, le PNSCA récolte les informations des marcations de point et les georeferencie dans la base cartographique, en insérent les ilustrations produites dans les croquis. Ces ilustrations comprennent des dessins, reproductions de symbols et objets (avirons, maisons, embarcations, intruments de travail, animaux, plantes, etc.) qui sont transformés, à partir du travail de l´équipe de chercheurs, en icônes pour composer les légendes des cartes. Simultaneiment, sont transcrits des morceaux (exertos?) de témoignages et, parmi eux, sont selectionés ceus qui composeront le fascicule. Avec la</p>
<p>carte conclue et les témoignages selectionés, un prototype du fascicule est rassemblé et envoyé à la communauté. Elle fait, donc, les corrections qu´elle veut, procéde à la lecture de la carte-pilote (¿) et l´envoi en retour au PNSCA. À partir de lá, les providences concernantes à la publication sont pris. Sont publiées mille copies de chaque fascicule. Une quantité plus petite de copies reste em mains du PNCSA, qui mantien quelques examplaires et distribue le rest à des chercheurs, centres de recherche, universités et agences de l´état comme le Ministério Público Federal et la Procuradoria da República. La partie la plus grande d´examplaires reste avec le mouvement sociale, et pour lui est utilisée comment il le veut, plusieurs fois comme partie intégrante de as strategie d´auto-afirmation social e de resolution de ses problémes.</p>
<p>* * *</p>
<p>Le Projet Nouvelle Cartographie Sociale de l´Amazonie (PNCSA) a produit entre mars 2005 et janvier 2009 un total de soixante-dix fascicules, organisés en six séries, correspondantes au travail des trois premières étapes de la recherche. Le PNCSA a produit également 13 livres et une carte (sinthèse référente au champ écologique des babaçuais). Au total, depuis 2005, 85 000 fascicules ont été imprimés, outre 13 000 livres et 7.400 cartes. Ce type de cartographie sociale se consolide depuis les expériences de relevés de cartographie sociale realisés dans la région correspondant au "Programme Grande Carajás", en 1991-1993, et dans la région écologique de babaçuais, en 2005. Le premier relevé cartographique a donné lieu à la publication d'un livre-carte intitulé Guerre des cartes (1993), puis Guerres écologiques aux babaçuais (2005). En 2005, le PNCSA a publié les six premiers fascicules de la série 1, Mouvements sociaux, Identités Collectives et Conflits, avec les Quebradeiras de Coco Babaçu des états du Piauí, Maranhão e Pará. Fin 2005, la série 1 a inclus les ateliers de cartes des communautés Quilombolas, des états du Pará, Maranhão et Amazonas, dont les fascicules ont étés publiés entre 2006 et 2007. Font partie de cette même série les travaux sur les artisans, ribeirinhos, ribeirinhas, piaçabeiros et peconheiros des états de Amazonas et Pará. En 2006, le projet a élargi les travaux de cartographie sociale hors de l´Amazonie avec la série 2, intitulée Projet Nouvelle Cartographie Sociale des Peuples et Communautés traditionelles du Brésil. Entre les années 2006 et 2007 10 fascicules ont ainsi été publiés, en se concentrant sur la diversité sociale, à savoir : Peuples Faxinais, Peuples des Fundos de Pasto, Quilombolas, Pêcheurs, Ribeirinhos, Cipozeiros et Peuples Pantaneiros, dans les états du Paraná, Bahia, Pará, Amazonas, Roraima, Pernambuco, Espírito Santo, Santa Catarina et Mato Grosso.</p>
<p>La série 3, Conflits dans les Villes de l´Amazonie, a commencé en 2006, et compte avec dix travaux réalisés dans la ville de Belém (peuples indigènes, homosexuels, afro-religieux, noirs, catadores, handicapés physiques, feirantes et ribeirinhos)et neuf travaux dans la ville de Manaus (Cartier Campos Salles, Jesus Me Deu, Communauté Parque Riachuelo, Femmes Indigènes et Artisans du Alto Rio Negro, Communauté Indigène Sateré-Mawé, Beco dos Pretos –Morro da Liberdade). En</p>
<p>outre, des fascicules ont été produits dans les villes de Salinas (PA), Rio Preto da Eva (AM), Manacapuru (AM) et Marabá (PA). Em 2008, trois séries ont été créés, celles de numero 4, 5 et 6. La série 4 s´intitule Les enfants et adolescents au sein des communautés traditionnelles de l'Amazonie et compte avec deux fascicules : "Enfants et adolescents ribeirinhos e quilombolas de Abaetetuba" et "Jeunes de communautés traditionelles du Baixo Tocantins : Cametá, Limoeiro do Ajuru, Igarapé Miri, Mocajuba". La série 5, Faxinalenses dans le Sud du Brésil, a permis de publier "Faxinalenses: Foi, connaissances traditionnelles et pratiques médicales", "Faxinalenses dans le secteur central du Paraná", "Faxinalenses dans le secteur sud du Paraná", "Faxinalenses dans le secteur metropoliatain de Curitiba". La 6éme et dernier série s´appelle Paraná et, pour l´instant, a seulement le fascicule "Comunauté Quilombola João Sura et Praia do Peixe".</p>
<p>La carte-guide Zones cartographiées à partir des ateliers de cartes du Projet Nouvelle Cartographie Sociale de l´Amazonie montre la mise en espace des champs cartographiés par les peuples et communautés traditionelles qui ont participé à des</p>
<p>ateliers de cartes et publié dans les fascicules des différentes séries. Sont présentes aussi sur la carte quelques détails sur les fascicules des séries 1 et 2 du Projet. L´équipe de collaborateurs du PNCSA est composé de 19 docteurs (em Antropologie, Droit, Géographie, Biologie, Sociologie et Histoire), 14 étudiants de doctorat, 22 masteurs, 14 étudiants de masteur, 7 spécialistes, 12 licenciés Eet 10 étudiants en licence. Entre mars 2005 et janvier 2009 plus de 1.800 agents sociaux ont participé aux ateliers, en cartographiant leurs mouvements sociaux respectifs et en réaffirmant leurs territorialitées specifiques.</p>
<p>Glossaire</p>
<p>Babaçuais: Plantation de noix de coco Babaçu.</p>
<p>Babaçu : Un fruit (coco) tropical de l´Amazonie, d´où on extrait unu huile.</p>
<p>Ribeirinho: Peuple natif qui vit au bord de la rivière dans la région de l´Amazonie.</p>
<p>Quilombolas: Les habitants d´un "Quilombo", la dénomination d´une zone d´habitation</p>
<p>historique d´un peuple d´origine africaine qui a fuit l´escalvage et établi une</p>
<p>communauté.</p>
<p>Cipozeiro: Nom des personnes qui récoltent des "cipó", une lianne.</p>
<p>Pantaneiro: Personne originaire du Pantanal, une région de marais située dans l'état du</p>
<p>Mato Grosso.</p>
<p>Piaçabeiro: personne qui travaille a l'extraction de la fibre du Piaçaba, un arbre utilisé</p>
<p>notamment dans la confection de balais</p>
<p>Peconheiro: personne qui travaille en grimpant dans les arbres pour y retirer les fruits,</p>
<p>les cipós et d´autres produits de l´agroextraction.</p>
<p>Faxinais: Peuples qui habitent des régions rurales du Paraná.</p>
                    </div>
                </div>
                <div class="app-content italian-about">
                    <div class="flag-content-header table">
                    <img class="flag-content-icon" src="<?php echo get_template_directory_uri(); ?>/images/languages/italian.png" />
                    <div class="flag-content-title">
                    <h1>Presentazione in italiano</h1>
                    </div>
                    </div>
                    <div class="flag-content-text">
                    <p>Il Progetto Nova Cartografia Social da Amazônia (Nuova Cartografia Sociale dell´Amazzonia) ha prodotto da marzo di 2005 a gennaio di 2009 un totale di setantta fascicoli organizzati in sei serie equivalente allo studio delle tre prime fasi del progetto. Inoltre ha prodotto 13 libri e 01 carta geografica – sintesi riferente alla regione ecologica dei "babaçuais".</p>
<p>Ogni fascicolo è il risultato concreto dell´unione degli sforzi e delle relazioni sociale tra le communità, i popoli nativi e i ricercatori per la elaborazione delle carte geografiche che ha richiuso la tappa del mappeamento con la pubblicazone del fascicolo. La staff di ricercatori è formata da 19 dottori (dei corsi antropologia, diritto, geografia, biologia, sociologia, storia), 14 studenti di dottorato, 22 laureati in master, 14 studenti ancora concludento il master, 07 studenti di specilacione, 12 laureati e 10 studenti svolgendo la laurea. Questo tipo di cartografia sociale se consolida sempre di più a partire dalle sperienze del mappeamento sociale realizzate nelle zone riferente al "Programma Grande Codajás" del 1991 al 1993 e nella regione ecologica dei babaçuais nel 2005.</p>
<p>Come conseguenza del primo mappeamento risultò il libro mappa intitolato: " Guerra dos Mapas" e del secondo " Guerra Ecologica nos Babaçuais" nel 2005. Sono stati stampati 85.00 esemplari dei fascicoli, 13.000 esemplari dei libri e 7.400</p>
<p>esemplari delle carte geografiche. Nel 2005 sono stati pubblicati i sei primi fascicoli della serie: Movimenti Sociale, Identità Coletive e Conflitti con le Schiacciatrice di nocce di cocco del babaçu delle regione di Piauí, Maranhão e Pará. Alla fine di 2005 sono iniziati anche i lavori nei laboratori di sviluppo delle carte geografiche della communità Quilombolas, nelle regione del Pará, Maranhão e Amazonas, cui i fascicoli furono pubblicati tra 2006 e 2007. Fanno parte anche di questa serie gli studi riferente agli artegiani, ribeirinhos, cipozeiros, piaçabeiros, peconheiros della regione dell´Amazonas e Pará. Nel 2006 il progetto si avviò oltre alle lavoro di mappeamento sociale dell´Amazzonia con due serie intitolate Progetto Nova Cartografia Social dos Povos e Comunidades Tradicionais do Brasil. ( Nuova Cartografia Sociale dei Popoli e delle Communità Tradizionale del Brasile). Tra gli anni di 2006 e 2007 furono pubblicati 10 fascicoli destinati alle diversità sociale dei popoli Faxinais, Fundo de Pasto, Quilombolas, Pescatori, Ribeirinhos, Cipozeiros, e popolo Pantaneiro della regione del Paraná, Bahia, Pará, Amazonas, Roraima, Pernambuco, Espírito Santos, Santa Catarina e Mato Grosso. La terza serie "Conflitos nas Cidades da Amazônia" ( Conflitti nelle città della Amazzonia) è iniziata in 2006 sono già stati svolti dieci studi realizzati nella città di Belém, capoluogo del Pará ( indiani, homesessuali, afro-religiosi, Negri, Raccoglitori, Handcapati,</p>
<p>fieranti, Ribeirinhos) e nove nella cittá di Manaus, capoluogo dell´Amazonas ( quartieri: Campos Sales, Jesus me Deu, Communità Parque Riachuelo I e II, Parque São Pedro, São Benedito da Praça 14 de janeiro, donne indiane e Artegiarni della regione dell´Alto Rio Negro, communità indigena Sataré – Mawè, e nel Beco do Negro - localizzato nei quartieri Morro da Liberdade. Ci sono ainda fascicolo produzir(facevate ou produrre ) gli città della Salinas, Rio Preto da Eva (AM), Manacapuru (AM) e Marabá (PA).</p>
<p>Nell 2008 ci sono crearevate la quarta serie "Crianças e adolescentes em Comunidades Tradicionais da Amazônia (Banbini e giovanotti Communità Tradizionale della Amazzonia). Furono pubbatti due fascicolo: Banbini e giovanotti Ribeirinhos e</p>
<p>Quilombolas de Abaetetuba e Giovanotti de Igarapé Miri, Mocajuba; la serie 5 "Faxinalenses no sul do Brasil" con il publicacione: Faxinalenses: Fé, Conhecimento Tradicionais e Práticas de Cura, Faxinalenses no setor Centro do Paraná, Faxinalenses no setor sul do Paraná, Faxinalenses no setor Metropolitano de Curitiba; la sei serie Paraná com il publicacione dall fascicolo "Communità Quilombola João Sura e Praia do Peixe". Nella mappa-guida si trovano le aree mappeate, proveniente dal lavoro fatti nei laboratori di sviluppo delle carte geografiche del Progetto Nuova Cartografia Sociale dell´Amazzonia, dimostra le specializzazione di queste aree mappeate e dai popoli e communità nativi che parteciparono delle attività laboartoriale, le quale sono state pubblicate nei faciscoli di ogni serie. Oltre la carta ci sono anche alcuni detagli sui fascicoli della prima e seconda serie del Progetto. Tra marzo del 2005 a gennaio del 2009 parteciparono più di 1.800 agenti sociali delle attività laboratoriali, dopo aver ricevuto l´ appoggio técnico della staff, con la finalità di produrre le carte geografiche, istrumento di grande importanza nella conquista dei loro territori. Vale dire che le communità sono i protagonisti principali del progetto cui il ruolo della staff è soltanto di offrire tecnica per la elaborazione dei fascicoli.</p>
<p>Glossario</p>
<p>Babaçuais: Piantagione sistematica di nocce di cocco</p>
<p>Babaçu : Albero tropicale dell´Amazzonia dove si estrae un olio</p>
<p>Ribeirinho: popolo nativo che vivono sulla riva del nella regione interna dell´Amazzonia</p>
<p>Quilombolas: denominazione data alle zone di abitazione del popolo africano schiavizzati</p>
<p>nell´epoca della colonizzazione dove si nascondevano dopo fuggiti.</p>
<p>Cipozeiro: nome generico di una pianta tropicale a fusto sottile che si attacano ad altre</p>
<p>piante . Liana</p>
<p>Pantaneiro: persona d´origine del pantanal mato-grossense</p>
<p>Pantanal: Regione del Mato Grosso, oppure zone innondate dal fiume.</p>
<p>Piaçaba: Albero tropicale (palma) di cui se estrae la fibra per produrre la scopa.</p>
<p>Piaçabeiro: Contadino che lavora nella estrazione delle fibre della piaçaba.</p>
<p>Peconha:Fascia fatta di panno o di foglie delle palme che protege i piedi e possibilita</p>
<p>l´arrampicaggio sui alberi della piaçaba.</p>
<p>Faxinais: popolo che abitano nella regione del Paraná.</p>
<p>Rio negro:</p>
<p>Beco: Vicolo</p>
                    </div>
                </div>
                <div class="app-content japan-about">
                    <div class="flag-content-header table">
                    <img class="flag-content-icon" src="<?php echo get_template_directory_uri(); ?>/images/languages/japan.png" />
                    <div class="flag-content-title">
                    <h1>日本語でのプレゼンテーション。</h1>
                    </div>
                    </div>
                    <div class="flag-content-text">
                    <p>プロジェクトの新たなソーシャルマッピングアマゾン（PNCSA）の自己に上昇を与える人々と、</p>
<p>アマゾンの伝統的な社会のマッピングを目的としています。素材生産だけではなく、この地域の占</p>
<p>領のプロセスについてのより多くの知識ですが、特に重視し、それには社会的な動きを強化するた</p>
<p>めの新しい楽器。これらの動きは、集団のアイデンティティの表現の、独特の社会状況に言及し、</p>
<p>地域ごとの構成されます。これらの属地主義、社会的にさまざまな社会的エージェントによって構</p>
<p>成は、特定のサポートしている集団的アイデンティティ、社会の動きにオブジェクト化されます。</p>
<p>領土異なるのは、このプロセスの強さは、このプロジェクトの対象となります。マッピングの戦闘</p>
<p>の要素として表示されます。生産のいずれかの社会的自己の可能性のある回の主張である。その理</p>
<p>由は、検索PNCSA自己の意思人々との問題に地域社会だけが運動を強化しようとして公開すると</p>
<p>、彼らはその多様な文化的表現の透明性を介して行うのマッピングを実現されます。</p>
<p>それぞれの問題は、人々や伝統的なコミュニティとの研究チームとの間の特定の社会的関係の結果</p>
<p>です。これはPNSCAマッピングを実行しようとする社会運動です。この既得権者は、約30社会的</p>
<p>な労働者や研究者が参加して地図上に1つのワークショップは、プロジェクトのメンバーです。そ</p>
<p>の中で、研究手法やGPSは、エージェントと話しの歴史についての証言の収集に加えて、マッピン</p>
<p>グを教えると社会問題の社会。ソーシャルワーカーは、自分の地域のマッピングのスケッチを生成</p>
<p>し、どの要素をその組成に関連することを示す。研究者の存在を抜きに2度目のGPSを、社会的な</p>
<p>労働者のマークは,</p>
<p>彼らは地域の重要な内容を検討のポイント。その後、PNSCAマークポイントとジオからの情報を</p>
<p>収集し、参照する製図の基本は、イラストが描かれたスケッチで生成挿入されます。これらのイラ</p>
<p>スト、図面、スケッチやシンボルとオブジェクトの複製（パドル、家庭、ボート、ツール、動物な</p>
<p>ど、植物、等）これはアイコンは、チームの仕事からの伝説を構成するために処理されますマップ</p>
<p>されます。同時に、インタビューからの転写の抜粋とを選択するものは、問題を確認します。</p>
<p>を使用して地図を完了しているものは、社会への言及されているプロトタイプの問題、フィット感</p>
<p>を選択しました。その後に応じて、地図を読んで修正がパイロットとPNCSAに送り返します。そ</p>
<p>れ以来、この手順は、出版関係になります。彼らは、各問題の万枚を発表した。コピーの小さい数</p>
<p>PNCSA氏は、いくつかのコピーを保持し、他の研究者、研究センター、大学や機関に配布する連</p>
<p>邦検察庁と検察のOfficeなどの手に委ねています。ほとんどのコピー社会運動によって保たれてい</p>
<p>たそれは、多くの社会的自己の戦略の一環として、願いを主張し、彼らの問題をプロジェクトの新</p>
<p>しい社会的なマッピングは、アマゾン</p>
<p>の決議の総生産に使用されて2005年3月2009年1月の間に70の問題、6つの系列に分かれ、研究の</p>
<p>最初の3つの段階の作業を指す。また、13本とする生態系の面積ババスの（合成）制作。</p>
<p>すべての問題の総発行部数は、書籍の85,000コピーに2005（年）以来、1万3000人にコピーし、マ</p>
<p>ップ、7400のコピーに対応し、社会地図作成このタイプの社会的なマッピングは、対応する実行</p>
<p>の経験から統合されている;グランデベレンプログラム;1991から1993年で、2005年には、地域の</p>
<p>生態系のババス。最初のマッピングは、マップ内の結果、本'というタイトルの戦争マップ（1993</p>
<p>年）、そして第2に、戦争の生態ババス（2005）。2005年に我々はシリーズ1の最初の6分割発行、</p>
<p>社会運動、集団のIDと競合と呼ばれるマップのピアウイ州、マラニョン州とパラー州の状態のババ</p>
<p>ス椰子のブレーカの隆起があり、2005年後半のワークショップえび茶色州パラー州、マラニョン</p>
<p>州、アマゾナスと同じシリーズの一部となり、その問題との間公開されて2006年と2007。また、</p>
<p>シリーズ1は、腕のいい職人は、沿岸、河川、ピアサペイロスと毒アマゾナス州とパラー州の状態</p>
<p>に設定作業</p>
<p>2006年にこのプロジェクトは、シリーズ2、ブラジルの社会地図作成プロジェクトは、新人民の伝</p>
<p>統的なコミュニティの権利とは、アマゾンが社会的なマッピングの作業を拡大した。2006年の間</p>
<p>に2007年10問題が公開され、社会の多様性、すなわち、焦点：掃除の人々は、資金の芝生、木ロ</p>
<p>ンポ、漁師、リバーサイド、タウンシポゼイロスとパンタナール、ペルナンブーコ州、バイーア州</p>
<p>、パラー州、アマゾナスの状態では、ロライマ州、ペルナンブーコ州、パラナ州、サンタカタリー</p>
<p>ナ州とマトグロッソ州。</p>
<p>2008年には三つの新シリーズ、その数は4、5および6で作成された。</p>
<p>4番と呼ばれる子供と、アマゾンの伝統的なコミュニティの青少年と2つの問題、子供と青少年と川</p>
<p>辺えび茶色アバエテツバ青少年とコミュニティの伝統的な低トカンチンス数：カメタ、レモン</p>
<p>アジュル、流れミリ、模を持っています。シリーズ5、ブラジル南部の</p>
<p>フアシナレンセスという4つの文書：フアシナレンセス：信仰、伝統的知識と実践ヒーリング、フアシ</p>
<p>ナレンセス部門センターパラナ州、南部のセクターやパラナ州フアシナレンセス部門の首都クリチ</p>
<p>バフアシナレンセスを持っています。6番目と最後のシリーズパラナ州は、今まで1つだけ問題：コ</p>
<p>ミュニティ木ロンブラススーラとジョンビーチ魚と呼び出されます。</p>
<p>地図ガイド地域プロジェクトの新しい社会的な地図作成、アマゾンのマップのワークショップから</p>
<p>マップされた地域の人々とのワークショップとは、問題の別のシリーズで公開されてマップ内の伝</p>
<p>統的な社会でマップの空間分布を示しています。また、地図上に表示されているシリーズの1と2は</p>
<p>、プロジェクトの問題についていくつかの詳細。</p>
<p>PNCSA</p>
<p>14博士課程、22のマスター、16マスターズ、12の専門家7および10の高校卒業生はマップのワーク</p>
<p>ショップに参加し19日、医師人類学、法律学、地理学、生物学、社会学、歴史（）で構成されて開</p>
<p>発者のチーム2005年3月2009年1月の間に1800年の社会労働者、彼らの動きをマッピングし、その</p>
<p>固有の領土であることを再確認。</p>
<p>日本語</p>
                    </div>
                </div>
                <div class="app-content spanish-about">
                    <div class="flag-content-header table">
                    <img class="flag-content-icon" src="<?php echo get_template_directory_uri(); ?>/images/languages/spain.png" />
                    <div class="flag-content-title">
                    <h1>Presentación en español</h1>
                    </div>
                    </div>
                    <div class="flag-content-text">
<p>El Projeto Nova Cartografia Social da Amazônia ha producido entre marzo de 2005 y enero de 2008 un total de cincuenta fascículos, organizados en tres series, correspondientes al trabajo de las dos primeras etapas del Proyecto. Además de fascículos, el Proyecto ha producido también 07 libros y 01 mapa – síntesis referente al área ecológica de las palmeras babaçu.</p>
<p>Cada fascículo, es el resultado de un conjunto de esfuerzos y de relaciones sociales entre la comunidad o pueblo tradicional y el equipo de investigadores, que empieza a concretarse en el taller de mapas y encierra esa instancia de mapeamiento con la publicación del fascículo. </p>
<p>El grupo de investigadores está compuesto por 15 doctores (antropología, derecho, geografía, biología, sociología, historia), 11 doctorandos, 04 máster, 12 maestrandos, 04 licenciados y 10 estudiantes de licenciaturas.</p>
<p>Este tipo de cartografía viene creciendo desde las experiencias de mapeamiento social realizadas en el área correspondiente al Programa Grande Carajás, en 1993, y en la región ecológica de babaçuais, en 2005. El primer mapeamiento resultó en el libro‐mapa titulado "Guerra de los Mapas" y el segundo en el libro‐mapa "Guerra Ecológica en los Babaçuais".</p>
<p>La tirada total de los fascículos corresponde a 70.000 ejemplares, la de los libros a 9.000 ejemplares y la de los mapas a 7.400 ejemplares. </p>
<p>En el año 2005 se realizaron las primeras publicaciones de los seis primeros fascículos de la Serie: Movimientos Sociales, Identidad Colectiva y Conflictos, con las Quebradeiras de Coco Babaçu de los Estados de Piauí, Maranhão y Pará. Hacia fines de 2005 empezaron, también como parte de la serie 1, los talleres de mapas en las Comunidades Quilombolas, en los Estados de Pará, Maranhão y Amazonas, cuyos fascículos son publicados entre los años 2006 y 2007. Forman parte, además, de esta serie, los trabajos de Artesanos, Artesanas, Ribeirinhos, Ribeirinhas, Recolectores de piaçaba (Piaçabeiros) y Peconheiros, de los Estados de Amazonas y Pará.</p>
<p>En el año 2006 el Proyecto expandió las zonas mapeables hacia las afueras de la Amazonia con la serie 2: Proyecto Nueva Cartografía Social de los Pueblos y Comunidades Tradicionales de Brasil. Entre los años 2006 y 2007 son publicados 10 fascículos con el trabajo de Povos dos Faxinais, Fundos de Pasto, Quilombolas, Pescadores, Riberinhos, Recolectores de mimbre (Cipozeiros) e Povoado Pantaneiro en los Estados de Paraná, Bahía, Pará, Amazonas, Roraima, Pernambuco, Espírito Santo, Santa Catarina y Mato Grosso.</p>
<p>La serie 3, Conflictos en las ciudades de Amazonia, comenzó en el año 2006, y cuenta con diez trabajos realizados en la ciudad de Belén (Indígenas, Homosexuales, Afro‐religiosos, Negras y Negros, Catadores, Personas con deficiencias, Feriantes y Ribeirinhos) y nueve en la ciudad de Manaos (Barrio Campo Sales, Jesus Me Deu, Comunidad Parque Riachuelo I, Parque Riachuelo II, Parque São Pedro, São Benedito da Praça 14 de Janeiro, Mujeres Indígenas y Artesanas del Alto Río Negro, Comunidad Indígena Sateré‐Mawé, Beco dos Pretos – Morro da Liberdade).</p>
<p> El mapa: 'Áreas mapeadas a partir de los talleres de mapas del Projeto Nova Cartografia Social da Amazônia' muestra la espacialización de las áreas mapeadas por los pueblos y comunidades tradicionales participantes de los talleres de mapas y publicados en fascículos de las diferentes series. Se presentan también en el mapa, algunos detalles sobre los fascículos de las series 1 y 2 del Proyecto.</p>
<p>Han participado de los talleres de mapas realizados entre marzo de 2005 y enero de 2008 más de 1.400 agentes sociales, mapeando sus movimientos sociales respectivos y reafirmando sus territorialidades específicas.</p>
                    </div>
                </div>
            </div>
        </div>
    
</div><!-- #primary -->
<?php get_footer(); ?>
