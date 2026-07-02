<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
    exit;
}

$to = 'technoworldhn@gmail.com';
$subject = 'Nuevo contacto desde TECHNO WORLD';

$nombre = trim(filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$telefono = trim(filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING));
$tipo = trim(filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING));
$mensaje = trim(filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_STRING));

if (!$nombre || !$email || !$mensaje) {
    echo json_encode(['success' => false, 'message' => 'Completa los campos obligatorios.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Correo electrónico inválido.']);
    exit;
}

$tipos = ['soporte' => 'Soporte Técnico', 'cotizacion' => 'Cotización', 'consulta' => 'Consulta General', 'otro' => 'Otro'];
$tipoLabel = $tipos[$tipo] ?? 'No especificado';

$body = "Nombre: $nombre\n";
$body .= "Email: $email\n";
$body .= "Teléfono: $telefono\n";
$body .= "Tipo de Consulta: $tipoLabel\n";
$body .= "Mensaje:\n$mensaje\n";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Mensaje enviado con éxito. Te contactaremos pronto.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al enviar el mensaje. Intenta de nuevo.']);
}
?>