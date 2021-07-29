# Watson Chatbot with Speech to text and Text to speech 
###### The code originaly was only for watson STT service cloned from  https://github.com/IBM/watson-streaming-stt


 ##
 

#### Dependencies installed:

 ````
 $ sudo apt-get install libasound-dev portaudio19-dev libportaudio2 libportaudiocpp0
 $ pip install pyaudio
 $ pip install websocket 
 #### Audio player dependencies
 $ sudo apt-get install ffmpeg libavcodec-extra
 $ pip install pydub
 ````
 #
 #### Steps:
 - ##### Setup Watson Speech to text service
 - ##### Setup Watson Assistant English chatbot service 
 - ##### Setup Watson Text To speech service
 > ###### TTS and Assistant are configured and used within the transcription code in transcription.py .
 - ##### Configure Watson Speech API's and Watson assistant configuration to send input voice as message for chatbot
 > ###### The Assistant will recieve a Message and send a response to TTS in the Speech To Text Stream 
 #

#### run:
````
$ python transcribe.py -t {seconds}

````
#### Script Cycle:
````
 1- Watson STT starts 
 2- If result Save to STT.txt 
 3- Send to Watson Asisstant
 4- Recive response from Assitant 
 5- Watson Text To Speech and play response
 6- Save TTS.mp3 
````

 #
 - #### Extra lines in the script to avoid alsa error handlers
 ````
 
from ctypes import *

# Define our error handler type
ERROR_HANDLER_FUNC = CFUNCTYPE(None, c_char_p, c_int, c_char_p, c_int, c_char_p)
def py_error_handler(filename, line, function, err, fmt):
 return
c_error_handler = ERROR_HANDLER_FUNC(py_error_handler)
asound = cdll.LoadLibrary('libasound.so')

# Set error handler
asound.snd_lib_error_set_handler(c_error_handler)

````
 #
##### Files:
  - ##### out.ogv
````A live recording Video ````
  - ##### setup.cfg , setup.py
  ``Setup configurations built totaly from the source``
   - ##### speech.cfg
  ``Authentication for My Watson Speech Apikey and Url``
   - ##### TTS.mp3
  ``Last Watson assistant TTS Response``
  -  ##### STT.txt
  ``Last complete trascripted phrase``
  -  ##### transcript.py
   ``The main script ... where the magic happened ^^``


