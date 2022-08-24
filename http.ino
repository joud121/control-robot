#include <HTTPClient.h>
#include <wifi.h>

const char* ssid = "Vwoki-GUEST";
const char* password = "";


const string url = "https://s-m.com.sa/r2/test/cpanel/retrieve.php"; // or change to your PC's IP address "https://192.168.00.0/sensors/select.php"


void setup() {

Serial.begin(115200);
WiFi.begin(ssid,password);

serial.print("connecting to WiFi);
while(WiFi.status()!= WL_CONNECTED){
dalay(500);
serial.print(".");
}

}

void loop() {
HTTPClient http;
http.begin(url);

int httpResponseCode = http.GET();

string payload =http.getstring();
  Serial.println();
  Serial.println(payload);

}
