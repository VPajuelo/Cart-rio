-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Mar-2022 às 23:55
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `noticias_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_tb`
--

CREATE TABLE `noticias_tb` (
  `id_noticia` int(11) NOT NULL,
  `data` date NOT NULL,
  `tipo` char(3) NOT NULL,
  `titulo` tinytext NOT NULL,
  `resumo` text NOT NULL,
  `texto` mediumtext NOT NULL,
  `imagem` varchar(48) DEFAULT NULL,
  `destaque` enum('sim','nao') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias_tb`
--

INSERT INTO `noticias_tb` (`id_noticia`, `data`, `tipo`, `titulo`, `resumo`, `texto`, `imagem`, `destaque`) VALUES
(1, '2011-05-30', 'pol', 'Senado tentou apagar impeachment de Collor de sua história', 'O Senado reinaugurou galeria que conta a história da Casa em 30.mai.2011 sem o episódio em que Fernando Collor foi retirado da Presidência da República por um impeachment.', 'O Senado reinaugurou galeria que conta a história da Casa em 30.mai.2011 sem o episódio em que Fernando Collor (PTB-AL), hoje senador, foi retirado da Presidência da República por um impeachment. O caso ganhou ampla repercussão no mesmo dia da abertura da mostra, inclusive nos jornais “Folha de S.Paulo”, “O Estado de S. Paulo” e “O Globo”.\r\n\r\nO local da exposição, conhecido como túnel do tempo, é um corredor situado entre a entrada do plenário do Senado e um dos locais da Casa com gabinetes de senadores. “Em 2007, às vésperas da posse de Collor no Senado, a Casa já havia retirado às referências ao caso, mas depois recuou e devolveu as imagens”, lembrou texto publicado no site da “Folha de S.Paulo” em 30.mai.2011.\r\n\r\nA nova exposição foi elaborada pela Subsecretaria de Criação e Marketing da Casa. O fato omitido é que, em dezembro de 1992, o Senado aprovou a perda do mandato presidencial de Collor e a perda de seus direitos políticos.\r\n\r\nOutro lado\r\nNa tentativa de explicar a situação, o presidente do Senado, José Sarney (PMDB-AP) disse que impeachment foi um “acidente” que “não deveria ter acontecido”.\r\n\r\nA “Folha” publicou a seguinte declaração de Sarney: \"Não posso censurar os historiadores que foram encarregados de fazer a história. Agora, eu acho que talvez esse episódio seja apenas um acidente e não devia ter acontecido na história do Brasil. Não é tão marcante como foram os fatos que aqui estão contados, que construíram as história e não os que de certo modo não deviam ter acontecido\".35%, mas perderia entre os eleitores com nível superior por 36% a   51%.</p>', 'html5.png', 'nao'),
(2, '2011-06-26', 'pol', 'Fernando Henrique Cardoso compareceu ao velório de Paulo Renato Souza', 'Para FHC, Paulo Renato mudou a educação no Brasil', 'O ex-presidente Fernando Henrique Cardoso compareceu ao velório de Paulo Renato Souza --o único ministro da Educação durante seus dois mandatos no governo federal.\r\n\r\nPaulo Renato morreu na noite de sábado (25) em São Roque, cidade no interior de São Paulo, após sofrer um infarto fulminante no hotel onde estava hospedado.\r\n\r\nO enterro está marcado para as 10h de segunda-feira (27), no Cemitério do Morumbi, em São Paulo.\r\n\r\n\"Era um amigo, conheço ele há muitos anos, trabalhamos juntos, ele organizou meu programa à Presidência da República pela primeira vez\", afirmou FHC.\r\n\r\nO presidente de honra do PSDB descreveu Paulo Renato como \"um grande ministro, que tinha grande capacidade de agregar, um homem generoso. Era uma pessoa sem ressentimentos nem inveja, fácil de lidar\".\r\n\r\nO tucano afirmou ainda que \"ele mudou educação no Brasil, os passos fundamentais do que está acontecendo agora e vai crescer mais ainda, dar acesso a todas as crianças à escola, criou o Fundef [Fundo de Manutenção e Desenvolvimento do Ensino Fundamental e de Valorização do Magistério], o Enem [Exame Nacional do Ensino Médio], fez a Lei de Diretrizes e Bases, tem uma obra marcante, sempre com espírito público\".\r\n\r\nPara Fernando Henrique, \"Paulo Renato nunca foi de espírito partidário, sempre foi de espírito público. É uma perda imensa\". \r\n\r\nDilma lembra \'relevantes serviços\' de ex-ministro\r\nMinistros do governo Dilma comparecem a velório de Paulo Renato', '', 'nao'),
(3, '2011-06-26', 'esp', 'Rafael Silva vence Copa do Mundo e acirra briga por Olimpíadas', 'Depois dos três ouros conquistados no sábado, Rafael Silva venceu seu parceiro de treinos Daniel Hernandez neste domingo e garantiu a quarta medalha de ouro brasileira na Copa do Mundo de Judô', 'Depois dos três ouros conquistados no sábado, Rafael Silva, o “Baby”, venceu seu parceiro de treinos Daniel Hernandez neste domingo e garantiu a quarta medalha de ouro brasileira na Copa do Mundo de Judô, disputada no Ginásio do Ibirapuera, em São Paulo.\r\n\r\nSilva e Hernandez estão disputando ponto a ponto a liderança do ranking, e consequentemente a vaga brasileira na categoria tanto para os Jogos Pan-Americanos quanto para as Olimpíadas de 2012.\r\n\r\n“A gente se conhece bastante, foi bem complicado, mas pensei bastante na luta e tive ajuda de amigos para formular uma boa tática”, declarou Silva ao final do combate.\r\n\r\n“Eu estou acompanhando o ranking ponto a ponto, mas o negócio é resolver no tatame”, frisou, lembrando que agora disputará outra etapa da Copa do Mundo em Miami. “Meu trabalho tem dado resultados, vamos seguir essa briga pra ver quem vai pro Pan e pra Londres”, finalizou Silva.\r\n\r\nAlém da prata de Hernandez, também ficou com o vice campeonato Hugo Pessanha, que perdeu a final dos médios para o cubano Asley Gonzalez. O Brasil conseguiu também cinco medalhas de bronze, entre as seis disputadas: Nacif Elias, Maria Portella, Luciano Correa, Natália Bordignon e Maria Suellen Altmann conquistaram a terceira posição em suas categorias.', 'rafael_silva.jpg', 'sim'),
(4, '2011-06-26', 'esp', 'Cielo conquista 3º ouro em Paris e confirma soberania antes do Mundial ', 'Neste domingo, o paulista venceu os 50 m livre e confirmou seu reinado nas provas de velocidade da natação antes do Mundial de julho, em Xangai.', 'Três medalhas de ouro em três provas disputadas. Foi assim que César Cielo encerrou a disputa do Aberto de Paris. Neste domingo, o paulista venceu os 50 m livre e confirmou seu reinado nas provas de velocidade da natação antes do Mundial de julho, em Xangai.\r\n\r\nO atleta do Flamengo conquistou o primeiro lugar com o tempo de 21s66, o melhor da temporada. Ele ficou à frente do francês Frédérik Bousquet (21s78) e do ucraniano Andrii Govorov (22s04). Bruno Fratus ainda ficou na quinta posição com 22s31.\r\n\r\nNo último sábado, Cielo já havia confirmado o favoritismo nos 50 m borboleta e nos 100 m livre. O atleta faturou o ouro nas duas disputas e ainda cravou o melhor tempo do ano na primeira prova, com 22s98.\r\n\r\nAntes de Cielo, Henrique Martins conquistou a primeira medalha do dia para o Brasil com o bronze nos 100 m peito. Depois, Joanna Maranhão ficou em terceiro nos 200 m borboleta seguida pela prata de Henrique Rodrigues nos 200 m medley. Depois da vitória do campeão olímpico, Leonardo de Deus ficou em terceiro nos 200 m costas.\r\n\r\nA seleção brasileira entrou na piscina após passar um período de 12 dias treinando em Londres. O Aberto da França é o principal campeonato de preparação para o Mundial de Xangai, que será disputado no fim de julho.', 'cielo.jpg', 'nao'),
(5, '2011-04-25', 'esp', 'Brasileira se torna 1ª mulher a \"surfar\" pororoca em um caiaque', 'A atleta, funcionária do UOL, conseguiu o feito entre os dias 15 e 23 de abril, durante uma viagem pela região amazônica.', 'Roberta Borsari se tornou a primeira mulher do mundo a surfar de caiaque na pororoca. A atleta, funcionária do UOL, conseguiu o feito entre os dias 15 e 23 de abril, durante uma viagem pela região amazônica.\r\n\r\nA pororoca é um fenômeno que forma ondas gigantes resultantes do encontro das águas de um grande rio com as do oceano. Roberta disse que, durante a viagem, as ondas chegaram a dois metros de altura.\r\n\r\n“A expedição foi um sucesso! Vivi uma das experiências mais marcantes, emocionantes e diferentes de tudo que já fiz no surfe”, afirmou a atleta, que conseguiu o feito no rio Araguari.\r\n\r\nRoberta contou com a ajuda de surfistas experientes para orientá-la. “A logística de posicionamento de entrada na onda e de resgate com o caiaque foi uma novidade tanto para mim como para a equipe e apoio. Durante a viagem fizemos vários testes até chegar à técnica ideal, parecia uma estratégia militar”, comentou.\r\n\r\nA atleta relembrou a dificuldade enfrentada para conseguir chegar ao local. “Foram oito dias embarcada na selva amazônica para conseguir o feito. Desembarquei em Macapá e de lá foram 18 horas rio adentro”, completou.', 'roberta.jpg', 'nao'),
(6, '2011-06-05', 'esp', 'Daniele Hypolito conquista mais um ouro e é confirmada na seleção', 'Durante a premiação, ela foi confirmada na seleção brasileira junto com Daiane dos Santos e Jade Barbosa', 'Um dia depois de vencer o Troféu Brasil de ginástica artística, Daniele Hypolito conquistou neste domingo o Circuito Caixa, disputado em Brasília. Durante a premiação, ela foi confirmada na seleção brasileira junto com Daiane dos Santos e Jade Barbosa.\r\n\r\nDaniele superou Ana Claudia Silva, que ficou em segundo lugar. No masculino, o vencedor foi Arthur Zanetti. Eliane Sampaio levou o ouro na ginástica rítmica.\r\n\r\nAlém da premiação, a presidente da Confederação Brasileira de Ginástica, Luciene Resnde, fez o anúncio oficial das seleções brasileiras.\r\n\r\nNa feminina de ginástica artística, foram confirmados os nomes de Daiane dos Santos, Daniele Hypolito, Jade Barbosa, Ana Claudia Silva, Adrian Gomes, Priscila Cobello, Gabriela Soares e Letícia Costa.\r\n\r\nA seleção masculina será composta por Diego Hypolito, Mosiah Rodrigues, Arthur Zanetti, Petrix Barbosa, Francisco Barreto, Péricles Silva, Vitor Rosa, Sergio Sasaki, Danilo Nogueira, Caio Costa e Arthur Nory.\r\n\r\nNa ginástica rítmica, o Brasil será representado por Drielly Daltoé, Angélica Kviecznski, Eliane Sampaio e Natalia Gaudio.', 'daniele.jpg', 'sim'),
(7, '2011-06-26', 'esp', 'Daiane dos Santos ganha primeiro ouro após volta à seleção', 'Com direito a duplo twist carpado, Daiane ficou em primeiro lugar no solo e levou a medalha de ouro.', 'Depois de voltar neste sábado a competir pela seleção brasileira após praticamente três anos de afastamento, Daiane dos Santos voltou também a vencer pelo Brasil, neste domingo, pelo Meeting Internacional de Ginástica Artística, em Natal. Com direito a duplo twist carpado, Daiane ficou em primeiro lugar no solo e levou a medalha de ouro.\r\n\r\nCom isso, a gaúcha de 28 anos caminha para voltar a se colocar entre os grandes nomes da modalidade, posto que assumiu com a vitória no Campeonato Mundial de 2003 - esta foi a primeira medalha de ouro brasileira em um Mundial. Ela venceu também duas Copas do Mundo, e compôs a primeira delegação do país em uma Olimpíada, em Atenas 2004.\r\n\r\nO campeonato Mundial deste ano acontece em outubro, em Tóquio, e logo aós Daiane também disputa os Jogos Pan-Americanos. A atleta tem como meta uma medalha nas Olímpiadas de 2012, em Londres, para depois provavelmente se aposentar de vez da seleção.', 'daiane.jpg', 'sim'),
(8, '2011-06-23', 'esp', 'Alonso: \"É mais fácil que faça o Caminho de Santiago que a recuperação\"', 'O piloto espanhol Fernando Alonso mostrou pessimismo nesta quinta-feira sobre as chances de garantir uma virada com a Ferrari na temporada 2011.', 'O piloto espanhol Fernando Alonso mostrou pessimismo nesta quinta-feira sobre as chances de garantir uma virada com a Ferrari na temporada 2011. “É mais fácil que faça o Caminho de Santiago que a recuperação”, disse após ser questionado sobre o líder do Mundial de Fórmula 1, Sebastian Vettel.\r\n\r\nAlonso reiterou que o desempenho do piloto da Red Bull é excelente. “Está um pouco longe e é difícil. O caminho até o título parece já muito definido neste ano. Vettel ganhou quase todas as corridas, tudo saiu muito bem para ele e conquistou uma grande vantagem”, explicou o espanhol.\r\n\r\nApesar de reconhecer o domínio do rival, Alonso quer tentar dificultar a vida de Vettel “a partir de agora, desta corrida”. O companheiro de Felipe Massa disse que McLaren e Ferrari podem segurar a Red Bull.\r\n\r\nEsta é uma das primeiras declarações pessimistas de Alonso nesta temporada. O espanhol, por outro lado, já havia comentado acreditar na Ferrari no GP da Europa. A prova será disputada em Valência neste final de semana.\r\n\r\nDe acordo com o espanhol, a escuderia estará forte. Alonso citou as suas últimas duas corridas para comentar que a Ferrari tem chances de conquistar a primeira vitória nesta temporada. “Eu sei que os torcedores estão esperando ansiosamente a nossa primeira vitória na temporada e posso assegurar que o mesmo acontece conosco”, disse o espanhol ao site oficial da Ferrari.', 'alonso.jpg', 'nao'),
(9, '2011-06-25', 'esp', 'Neymar estampa capa de revistas semanais e é apontado como sucessor de Pelé', 'Campeão da Copa Libertadores no comando do Santos, estampou a capa de duas das maiores revistas semanais do país: Veja e ISTOÉ.', 'Neymar superou a ação dos hackers contra os políticos, a discussão a respeito da homofobia e a grave crise financeira europeia. Mesmo com todos esses assuntos em pauta durante a semana, foi o atacante, campeão da Copa Libertadores no comando do Santos, quem estampou a capa de duas das maiores revistas semanais do país: Veja e ISTOÉ.\r\n\r\nMais que isso, Neymar foi comparado ao maior jogador de todos os tempos. “Finalmente surge um craque da linhagem de Pelé”, escreveu a Veja em sua capa, que apresenta um sorridente Neymar com uma coroa dourada com os dizeres “Reymar”.\r\n\r\nA opção das publicações dá a dimensão que Neymar ganhou. Grande estrela do Santos, o atacante é titular absoluto e grande estrela da seleção brasileira. Com a conquista da Libertadores, da qual foi o grande protagonista, se aproximou ainda mais do status dado aos maiores jogadores da história, mesmo com 19 anos.\r\n\r\nAs matérias das duas revistas tentam esmiuçar o dia-a-dia do jogador que, segundo a Veja, ganha R$ 1 milhão por mês. Em ambas, Neymar é retratado como responsável com os gastos, esforçado e cumpridor de metas.\r\n\r\nSua relação com a mãe do futuro filho também é tema para as publicações. Em entrevista à ISTOÉ, o pai de Neymar revelou um desejo de que o casal termine junto. “Quem sabe eles amadurecem e vão morar juntos”, disse o ex-jogador e hoje empresário do filho homônimo. ', 'neymar.jpg', 'sim'),
(10, '2011-03-22', 'esp', 'Homenagem a Kostelic', 'Torcida se anima e esquia sem roupa na Croácia', 'Os torcedores croatas não esconderam a animação pela vitória do compatriota Ivica Kostelic no evento geral da Copa do Mundo de esqui em Zagreb, no último fim de semana.\r\n\r\nContentes pelo triunfo de Kostelic, os torcedores croatas resolveram descer a montanha sem roupas nesta terça-feira para homenageá-lo. Ídolo local, o atleta ficou marcado por ter sido três vezes vice-campeão olímpico, sem nunca ter vencido os Jogos', 'esquii.jpg', 'nao'),
(11, '2011-05-13', 'esp', 'Ídolo do Vasco, Edmundo retorna ao clube, mas para o futebol de areia', 'O ex-atacante vai reforçar o time cruzmaltino na 1ª Copa Brasil de Futebol de Areia', 'Grande ídolo da história do Vasco, Edmundo, atualmente comentarista da Rede Bandeirantes, está de volta a São Januário. O ex-atacante vai reforçar o time cruzmaltino na 1ª Copa Brasil de Futebol de Areia, em Manaus, no fim deste mês.\r\n\r\n“É a nossa grande contratação. O Edmundo vai participar com a gente da Copa do Brasil. O nosso objetivo é tornar o futebol de areia popular e vamos explorar a imagem do Edmundo, que é vascaíno e está muito empolgado com tudo isso”, disse o coordenador de futebol de areia Júnior Negão, à TV Vasco.\r\n\r\nNeste domingo, às 9h30, ainda sem Edmundo, o Vasco, campeão Mundialito de Futebol de Areia de Clubes, vai enfrentar o Búzios. O jogo acontece na Praia do Leme (em frente ao antigo hotel Le Meridien).', 'edmundo.jpg', 'nao'),
(12, '2011-06-16', 'cul', 'Violência prejudica rendimento escolar, diz estudo da USP', 'O abandono da escola aumenta a violência, bem como a violência na escola gera baixa no rendimento escolar. Estas conexões foram confirmadas pelo economista Evandro Camargos Teixeira em sua tese de doutorado apresentada no Departamento de Economia,', 'O abandono da escola aumenta a violência, bem como a violência na escola gera baixa no rendimento escolar. Estas conexões foram confirmadas pelo economista Evandro Camargos Teixeira em sua tese de doutorado apresentada no Departamento de Economia, Administração e Sociologia da Escola Superior de Agricultura Luiz de Queiroz (Esalq) da USP, em Piracicaba. O estudo foi realizado por meio de  modelos econométricos, um conjunto de ferramentas e dados estatísticos que possibilitou analisar o vínculo entre educação e criminalidade.\r\n\r\nO objetivo da pesquisa foi analisar a relação intrínseca entre criminalidade e educação de duas formas distintas: o impacto da educação defasada ou o abandono escolar sobre a criminalidade do ano posterior ao abandono, em todos os Estados brasileiros, no período 2001 a 2005; e também o efeito da violência sobre o desempenho escolar dos alunos do Estado de São Paulo em 2007.\r\n\r\nA relação de todos os dados foi estabelecida em um banco de dados. A conclusão após o cálculo matemático no modelo econométrico foi de que a criminalidade aumentou em 51% em todos os Estados brasileiros, conjuntamente analisados, no período de 2001 a 2005, devido à evasão escolar.\r\n\r\n“Não se pode afirmar que todos os alunos se tranformem em bandidos. Aliás, este não foi o foco do estudo”, afirma Teixeira. Segundo o pesquisador, quem deixa a escola tem tanto a possibilidade de virar membro de uma gangue, quanto de simplesmente estar excluído do mercado de trabalho formal. “O modelo apenas associou e assinalou a proporção direta de crescimento entre abandono defasado ou evasão escolar e taxas de homicídio, quando a evasão aumenta, os homicídios também crescem”.', '', 'nao'),
(13, '2011-06-24', 'eco', 'Preço de venda do carro é determinado por ano-modelo', 'O preço do carro é determinado pelo ano-modelo, e não pelo ano de fabricação.', 'Na hora de comprar ou vender um carro, o proprietário deve ficar atento. O preço do carro é determinado pelo ano-modelo, e não pelo ano de fabricação.\r\n\r\nPor exemplo, se um carro foi fabricado em 2000, mas o modelo dele é 2001, na hora de vender, o veículo o preço tem de ser baseado no modelo, que é 2001.\r\n\r\nPortanto, na hora de vender o carro, o proprietário deve exigir que ele seja avaliado pelo ano-modelo, mesmo que ele não tenha nenhuma mudança nas características em relação ao modelo anterior, segundo informações da Agência Autoinforme.', NULL, 'nao'),
(14, '2011-06-23', 'eco', 'Perdeu o emprego? Aprenda a organizar as finanças para evitar o superendividamento', 'De acordo com o educador financeiro e presidente do Instituto DSOP, Reinaldo Domingos,a primeira coisa a fazer é um diagnóstico financeiro', 'A perda repentina do emprego é um momento de grande apreensão para a maioria das pessoas. Como pagar as contas e manter um padrão mínimo de vida estão entre as principais dúvidas de quem se vê de frente com este tipo de situação.\r\n\r\nDe acordo com o educador financeiro e presidente do Instituto DSOP, Reinaldo Domingos, nesta hora, a primeira coisa a fazer é um diagnóstico financeiro, anotando todos os gastos mensais e qual a reserva financeira que a família possui.\r\n\r\n\"É preciso fazer as contas e verificar por quanto tempo as reservas financeiras vão durar”, diz o educador.\r\n\r\nSegundo ele, nos gastos familiares, devem estar incluídos apenas os itens básicos, essenciais para a vida da família.\"Neste tipo de situação, todas as despesas supérfluas devem ser eliminadas. É importante cortar os excessos e ficar apenas com aquilo que é indispensável”, afirma o educador.\r\n\r\nSegundo Domingos, em casos extremos, uma opção por exemplo é vender o carro. “Você terá uma despesa a menos com manutenção e combustíveis e ainda pode investir o dinheiro e usar para o pagamento de contas básicas, se for o caso”, diz.\r\n\r\nNeste caso, ele afirma que a melhor opção é deixar o dinheiro na caderneta de poupança, que tem grande liquidez e é isenta de tributação. “Não adianta pegar o valor do carro e investir em ações, por exemplo. Este é um momento em que não se pode correr nenhum risco”, afirma.', NULL, 'nao'),
(15, '2011-06-20', 'eco', 'UE fechará fronteiras para evitar grandes fluxos migratórios', 'De acordo com documento divulgado hoje em Bruxelas, o controle fronteiriço será utilizado apenas \"em situações realmente críticas\"', 'A União Europeia aprovou nesta sexta-feira a reintrodução de controles em suas fronteiras internas, de forma a evitar fluxos migratórios descontrolados.\r\nDe acordo com documento divulgado hoje em Bruxelas, o controle fronteiriço será utilizado apenas \"em situações realmente críticas, quando um estado membro não for capaz de cumprir com suas obrigações segundo as normas de Schengen [o tratado de livre circulação na região] devido à imigração ilegal de nacionais de terceiros países com efeito negativo sobre outros Estados membros\".\r\n\r\nA medida, entretanto, deverá ser aplicada por um período \"estritamente limitado\", mediante \"critérios objetivos\". O documento, porém, não informa se a reintrodução do controle fronteiriço poderá ser feita unilateralmente ou se será necessária a concordância da Comissão Europeia.\r\n\r\nA restrição à livre circulação foi sugerida pelo premiê italiano, Silvio Berlusconi, e pelo presidente francês, Nicolas Sarkozy, diante da onda de imigrantes ilegais vindos dos países árabes, devido aos conflitos no Oriente Médio e no norte da África.\r\n(Francine De Lorenzo | Valor, com agências internacionais)', NULL, 'nao'),
(16, '2011-06-23', 'eco', 'Gêmeos Winklevoss voltam a processar fundador do Facebook', 'Os gêmeos Tyler e Cameron Winklevoss, que reivindicam um papel na criação do Facebook, voltaram a processar, na quinta-feira (23), o fundador da rede social, Mark Zuckerberg.', 'Os gêmeos Tyler e Cameron Winklevoss, que reivindicam um papel na criação do Facebook, voltaram a processar, na quinta-feira (23), o fundador da rede social, Mark Zuckerberg.\r\n\r\nSegundo um documento enviado a um tribunal federal de Massachusetts, os irmãos e seu amigo Divy Narendra pedem à corte que determine se o Facebook \"intencionalmente ou de maneira inadvertida suprimiu provas\" durante as negociações que resultaram em um acordo de mais de US$ 65 milhões com Zuckerberg.\r\n\r\nOs três demandantes consideram que o Facebook deveria ter incluído no expediente mensagens eletrônicas redigidas na época em que estavam em contato com Zuckerberg para a criação da rede social.\r\n\r\nNa quarta-feira (22), os gêmeos e Narendra, que afirmam que o fundador do Facebook roubou sua ideia, haviam anunciado a decisão de não exigir o cancelamento do acordo de US$ 65 milhões para resolver o processo iniciado em 2008.\r\n\r\nMas eles consideram que foram enganados sobre o valor real das ações do Facebook na época. Os irmãos acreditam que deveriam ter recebido uma quantia maior ou mais ações da rede social. ', '', 'nao'),
(17, '2020-09-30', 'int', 'Doença de Chavez gera dúvidas e controvérsias ', 'ChÃ¡vez, 56, sÃ³ falou publicamente uma vez desde a cirurgia a que se submeteu em Cuba, no dia 10 de junho, devido ï¿½quilo que as autoridades venezuelanas afirmaram ter sido um abcesso pï¿½lvico.', 'O prolongado retiro do presidente da Venezuela, Hugo ChÃ¡vez, em Cuba, apÃ³s ter sido submetido a uma cirurgia de emergï¿½ncia devido a um problema abdominal, agitou os seus oponentes aqui em Caracas, que jï¿½ vinham criticando a dependï¿½ncia venezuelana de assessores cubanas nas questï¿½es militares e de inteligï¿½ncia.\r\n\r\nA escassez de detalhes sobre a doenï¿½a e a recuperaï¿½ï¿½o de Chï¿½vez nas duas ï¿½ltimas semanas ï¿½ as notï¿½cias tï¿½m sido divulgadas aos poucos pela mï¿½dia estatal daqui, com uma cautela digna do aparato de propaganda do Partido Comunista de Cuba ï¿½ tambï¿½m estimulou a dividida oposiï¿½ï¿½o venezuelana, que deseja derrotar Chï¿½vez em uma eleiï¿½ï¿½o presidencial no ano que vem.\r\n\r\nOs seus oponentes questionam se a constituiï¿½ï¿½o do paï¿½s permite que Chï¿½vez deixe de lidar com as questï¿½es nacionais por um perï¿½odo indeterminado enquanto fica fora da Venezuela. As crï¿½ticas aumentam enquanto o governo dele enfrenta problemas como as constantes interrupï¿½ï¿½es do fornecimento de energia elï¿½trica e a crise que se agrava no sistema carcerï¿½rio, com um impasse entre detentos armados e soldados que jï¿½ provocou a morte de mais de 20 pessoas.\r\n\r\nï¿½O fato de o presidente governar de Havana se constitui em uma humilhaï¿½ï¿½o inaceitï¿½vel para os cubanosï¿½, criticou em uma entrevista Maria Corina Machado, parlamentar e crï¿½tica proeminente de Chï¿½vez. ï¿½O presidente da repï¿½blica tem que mostrar a caraï¿½.', 'chavez.jpg', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_tb`
--

CREATE TABLE `tipos_tb` (
  `id_tipo` int(11) NOT NULL,
  `value` char(3) NOT NULL,
  `label` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipos_tb`
--

INSERT INTO `tipos_tb` (`id_tipo`, `value`, `label`) VALUES
(1, 'cad', 'Cidades'),
(2, 'cul', 'Cultura'),
(3, 'eco', 'Economia'),
(4, 'esp', 'Esportes'),
(5, 'int', 'Internacional'),
(6, 'pol', 'Política');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(24) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `senha_md5` varchar(32) NOT NULL,
  `nome` tinytext NOT NULL,
  `tipo` enum('sup','com') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id_usuario`, `usuario`, `senha`, `senha_md5`, `nome`, `tipo`) VALUES
(1, 'mojica', '1234', '81dc9bdb52d04dc20036dbd8313ed055', 'José Mojica Marins Zé do Caixão', 'sup'),
(2, 'lapiao', '4321', 'd93591bdf7860e1e4ee2fca799911215', 'Virgulino Ferreira Lampião Rei do Cangaço', 'com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `noticias_tb`
--
ALTER TABLE `noticias_tb`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Índices para tabela `tipos_tb`
--
ALTER TABLE `tipos_tb`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices para tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias_tb`
--
ALTER TABLE `noticias_tb`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tipos_tb`
--
ALTER TABLE `tipos_tb`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
