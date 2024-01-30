#include <WiFi.h>

const char* ssid = "your_wifi_ssid";
const char* password = "your_wifi_password";
const char* serverUrl = "http://your_server_ip/store_data.php";

void setup() {
  Serial.begin(115200);

  // Connect to Wi-Fi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("Connected to WiFi");

  // Your sensor data
  int sensorValue = analogRead(A0);

  // Send data to the server
  sendSensorData(sensorValue);
}

void loop() {
  // Your main loop code
}

void sendSensorData(int data) {
  // Create a URL with the sensor data
  String url = serverUrl + "?data=" + String(data);

  // Use WiFiClient to connect to server
  WiFiClient client;
  if (!client.connect(server, 80)) {
    Serial.println("Connection failed");
    return;
  }

  // Send HTTP request
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + server + "\r\n" +
               "Connection: close\r\n\r\n");
  delay(10);

  // Read and print the server response
  while (client.available()) {
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }

  Serial.println();
  Serial.println("Request sent");

  // Close connection
  client.stop();
}

