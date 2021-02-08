# YouTube Transcriptions

# Motivation

People will be able to just quickly read through the text version of any YouTube video and they won't have to sit around for eight to ten minutes just to see what somebody has to say.

# How?

A YouTube transcription service, create a simple service that will
transcribe YouTube videos into text.
When watching a YouTube video you will notice that all of the captions
are available when pressing the caption button on the video. 
So I needed to find a way to extract this and I know that the data is available somewhere on the web page, so going into the console and we can go into the network
and we check that when we load up the captions we're going to see that there's
a request here to undocumented API called 'timed text' and we can see that the response is actually all of the captions. We see the utf-8 words, we see the offset times at which they're going to appear and so this is the file that I needed.
A potential solution is a client size solution that executes in JavaScript on the browser and it can scrape the web page to find this URL and then once we have that URL
we can fetch the data, the contents of that URL parse it and then format it into some nice visual document that the viewer can read if they wanted to just read the transcript for the whole entire video.

# Solution

There are really a number of different technical approaches. I could build a browser plugin for example a chrome or firefox plugin but one thing that we can do that's going to be workable across any browser virtually is known as a JavaScript bookmarklet. We create a bookmarklet that takes some of the data from the page it can execute JavaScript on the page, obtain the url and then send that into a new window that shows the transcript for the YouTube video. 

This is a side project that I have been able to accomplish following a YouTube tutorial, and it was a good motivating way to start learning php and get fimiliar  with the syntax. See this video for information: https://youtu.be/r7SO-Oq3d5E

