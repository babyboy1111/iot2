#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h> 
 
//Access point credentials
const char* ssid = "Doan Thi Tam";
const char* pwd = "19681968";
const char* host = "http://192.168.1.7:81";
String get_host = "http://192.168.1.7:81";
#define LED 2
WiFiServer server(80);  // open port 80 for server connection
 
void setup() 
{
  Serial.begin(115200); //initialise the serial communication
  delay(20);
 
  WiFi.begin(ssid, pwd);
 
   pinMode(LED,OUTPUT);
    //starting the server
    server.begin();
 
}
 
void loop()
{
  //call_test();
  get_device_status("light1","Home Light");
  get_device_status("light2","Shop Light");
       
}
 
 
void call_test()
{
  Serial.println("It is test");
  }
 
void get_device_status(String device_name, String device_text)
  {
    
    WiFiClient client = server.available();
 
        HTTPClient http;
        String url = get_host+"/demo/control/get_status.php?device_name="+device_name;
        
        http.begin(url);
        Serial.println(url);
        //GET method
        int httpCode = http.GET();
        String payload = http.getString();
        Serial.println("sssssssss");
        Serial.println(payload);
        Serial.println(payload.length());
        payload.trim();
        Serial.println(payload.length());
        if(payload=="onl1")
        {
         digitalWrite(LED,LOW);
        }
        else if(payload=="offl1")
        {
         digitalWrite(LED,HIGH);
        }
         else{
         Serial.println("kkkkkkkkk"); 
         }
        http.end();
        delay(1000);
  
  }
