# Watson Chatbot with Speech to text and Text to speech 

> The code for the Speech to text cloned from https://github.com/IBM/watson-streaming-stt
- ### Dependencies used :
 ````
 pip pyaudio
 pip websocket 
 
 ````
 #
 - #### Setup Watson Speech to text service
 - #### Setup Watson Assistant English chatbot service 
 - #### Setup Watson Text To speech service with AlissonV3 voice model 
 #
 
#### run
````
$ python transcribe.py -t {seconds}

````
#### Script Cycle:
**``
 Watson SpeechToText to transcribe > Save STT.txt >  Send to Watson Asisstant
Recive response from Assitant >  Save TTS.mp3 > Watson Text To Speech to play response
``**





