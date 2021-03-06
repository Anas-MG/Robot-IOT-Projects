## Speech chatbot with Python and IBMWatson:

![Screenshot (246)](https://user-images.githubusercontent.com/49666154/127555231-98bd7ea2-96fa-416a-ae7b-fdd68ec45006.png) 
#### This project is to give the robot a Speaking ability so it can handle conversation with Visitors
#### The project's approach is to build text to speech and speech to text services to use it in the main robot face page



 ##
 

#### Dependencies installed:

 ````
 $ sudo apt-get install libasound-dev portaudio19-dev libportaudio2 libportaudiocpp0
 $ pip install pyaudio
 $ pip install websocket 
 ````
  #### Audio player dependencies
 ````
 $ sudo apt-get install ffmpeg libavcodec-extra
 $ pip install pydub
 ````
 ## 
 - #### The project is ready to use after installing the dependencies 
 ####  run:
````
$ python transcribe.py -t {seconds}

````
 #
 #### Steps:
 - ##### Setup Watson Speech to text service
 - ##### Setup Watson Assistant English chatbot service 
 - ##### Setup Watson Text To speech service
 - ##### Programming the main script to handle input voice with IBM Watson STT service and send it as message for chatbot
 - ##### Programming the main script to handle chatbot answer with IBM Watson TTS service 
 ###### The code originaly was for STT service cloned from  https://github.com/IBM/watson-streaming-stt
 ###### Then I've merged my TTS and Assistant script within the transcription code in transcription.py .
 #

  #### Extra lines in the script to avoid alsa error handlers
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
#### Cycle:
````
 1- Watson STT starts 
 2- If result Save to STT.txt 
 3- Send to Watson Asisstant
 4- Recive response from Assitant 
 5- Watson Text To Speech and play response
 6- Save TTS.mp3 
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


