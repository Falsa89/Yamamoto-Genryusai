<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$senderId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || $text=="capitano")
{
	$response = "......!";
}
elseif (strpos($text, "vattene") !== false)
{
	$response = "Ascolta bene! Vattene da qui! Non ho né il tempo né la pazienza di insegnare a un semplice bambino come te come respirare.";
}
elseif (strpos($text, "sentiero") !== false)
{
	$response = "Eri il mio orgoglio e la mia gioia, come fossi il mio stesso figlio. Ho creduto in te, e anche se avremmo potuto avere pensieri diversi, ho sempre sentito che avremmo camminato sulla stessa strada !";
}
elseif (strpos($text, "perdono") !== false)
{
	$response = "Ti ho insegnato meglio di così! Sai che non può esserci perdono per coloro che hanno sfidato la giustizia! ";
}
elseif (strpos($text, "sbagliato") !== false)
{
	$response = "Un discorso così sciocco! Non hai il diritto di decidere da solo ciò che è giusto e sbagliato. È tuo dovere accettare la vera giustizia del mondo!";
}
if (strpos($text, "spirito") !== false) 
{
	$response = "Vi imploro. Devete mettere tutto il vostro spirito in questo per sconfiggerli qui! Anche se la vostra carne venisse strappata dal corpo, usate le vostre ossa per formare un muro impenetrabile! Non importa quale sia il costo, non dobbiamo lasciargli fare nemmeno un passo nella Soul Society! Attack Now!";
}
elseif (strpos($text, "bestia") !== false)
{
	$response = "Per me è ovvio che sei una semplice bestia che vive solo per uccidere. Che pietà.";

}
elseif (strpos($text, "inferno") !== false)
{
	$response = "Preparati. Morirai in questo inferno ardente.";

}
elseif (strpos($text, "ingenuo") !== false)
{
	$response = " Pensi di potermi uccidere così facilmente, solo neutralizzando la mia Ryūjin Jakka? Che ingenuo! Sono stupito dalla tua totale mancanza di intuizione. Come pensi che io sia rimasto Capitano-Comandante del Gotei 13 per oltre mille anni? Nessuno Shinigami nato in tutto questo tempo è stato più forte di me.";

}
elseif (strpos($text, "rimorso") !== false)
{
	$response = "Sono contento che tu sia ora una creazione mostruosa e non più solo un bambino. Posso ucciderti senza essere torturato da sentimenti di rimorso.	";

}
elseif (strpos($text, "annient") !== false)
{
	$response = " È da tanto che non cerchi di uccidermi, vero ? Sono venuto qui per annientarti.";

}
elseif (strpos($text, "bentornat") !== false)
{
	$response = "È passato molto tempo mi fa piacere vederti vivo e vegeto";
}
elseif (strpos($text, "giustizia") !== false)
{
	$response = "Non esiste un senso individuale di giustizia che possa prevalere sulla giustizia del mondo.";
}
elseif (strpos($text, "yamamoto") !== false)
{
	$response = "ex capitano della 1a divisione; è molto rispettato dalla maggior parte degli Shinigami. è l'incarnazione della convinzione, Yamamoto segue le leggi e i regolamenti della Soul Society alla lettera e si aspetta lo stesso dagli altri.";
}


$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
