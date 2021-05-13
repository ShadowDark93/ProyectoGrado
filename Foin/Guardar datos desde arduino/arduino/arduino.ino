/************************ Main Program Starts Here *******************************/
#include <ESP8266WiFi.h>
#include <ArduinoHttpClient.h>
#include "ACS712.h"

/******************************* WIFI Configuration **************************************/

#define WIFI_SSID       "WIFI_UCC_ESTUDIANTES"
#define WIFI_PASS       "1234567890"


#define LED_PIN 4
#define OTHER_PIN 2

//valores para el sensor de corriente
float P;
float I;
float V;

// ip equipo que actua como servidor
const char* host = "arduino-post.smartandcomputer.co";
// ancla la variable del sensor de corriente
ACS712 sensor(ACS712_05B, A0);

// button state
int current = 0;
int last = 0;

void setup() {

  pinMode(LED_PIN, OUTPUT);
  pinMode(OTHER_PIN, OUTPUT);

  // start the serial connection
  Serial.begin(115200);

    // Nos conectamos a nuestro wifi

  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(WIFI_SSID );

  WiFi.begin(WIFI_SSID, WIFI_PASS);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP()); 

  // calibrate() method calibrates zero point of sensor,
  // It is not necessary, but may positively affect the accuracy
  // Ensure that no current flows through the sensor at this moment
  // If you are not sure that the current through the sensor will not leak during calibration - comment out this method
  Serial.println("Calibrating... Ensure that no current flows through the sensor at this moment");
  sensor.calibrate();
  Serial.println("Done!");
  
}

void loop() {
    conexion();
}


// Read current from sensor  
void corriente(){
  // We use 230V because it is the common standard in European countries
  // Change to your local, if necessary
  V = 3;

  // To measure current we need to know the frequency of current
  // By default 50Hz is used, but you can specify desired frequency
  // as first argument to getCurrentAC() method, if necessary
  I = sensor.getCurrentAC();

  // To calculate the power we need voltage multiplied by current
  P = V * I;

  Serial.println(String("I = ") + I + " A");
  Serial.println(String("P = ") + P + " Watts");
  Serial.println(String("V = ") + V + " Volts");

  delay(200);
}

//funcion de conexion y envio de información
void conexion(){

  //Se obtiene el valor del sensor
  corriente();
  
   // Cambia la frecuencia con la que envia los datos en milisegundos 
  delay(60000);

  Serial.print("connecting to ");
  Serial.println(host);

  // Creamos una instancia de WIFICLIENT 
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
}
  
  // Creamos la dirección para luego usarla en el String del POST que tendremos que enviar
  String url = "http://arduino-post.smartandcomputer.co/insert.php";
  // creo un string con los datos que enviaré por POST lo creo de antemano para luego poder calcular el tamaño del string dato que necesitare para enviar por post
  String data = "devices_id=4&amps="+String(I)+"&watts="+String(P)+"&volt="+String(V);

  //imprimo la url a donde enviaremos la solicitud, solo para debug
  Serial.print("Requesting URL: ");
  Serial.println(url);
  Serial.println(data);
  // Esta es la solicitud del tipoPOST que enviaremos al servidor
  client.print(String("POST ") + url + " HTTP/1.0\r\n" +
               "Host: " + host + "\r\n" +
               "Accept: " + "/" + "\r\n" +
               "Content-Length: " + data.length() + "\r\n" +
               "Content-Type: application/x-www-form-urlencoded\r\n" +
               "\r\n" + data);
  delay(10);

  // Leemos todas las lineas que nos responde el servidor y las imprimimos por pantalla, esto no es necesario  pero es fundamental ver què me responde el servidor para localizar fallas en la solicitud post que estoy enviando, 
  Serial.println("Respond:");
  
  while(client.available()){
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }

  Serial.println();

  // se cierra la conexión
  Serial.println("closing connection");
}
