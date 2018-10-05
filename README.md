# audioPlayer

Audio file player and visualizer based on the Web Audio API

### Browser Support: 
- Chrome (webkit) v14
- Firefox (gecko) v23
- Opera (webkit) v15
- Safari (webkit) v6

### Quick Guide:
```javascript
$(window).load(function () {
    $("#audioWrapper").audioPlayer({
        playlist: [
            {src: "filename1.mp3"},
            {src: "filename2.mp3"},
            {src: "filename3.mp3"}
        ]
    });
    
    $("#audioWrapper").audioPlayer().play();
});
```

### Visualization:
Currently only "bars" visualization is built.
```javascript
$(window).load(function () {
    $("#audioWrapper").audioPlayer({
        fx: "bars",
        width: 125, // This represents one box. (See Demo)
        height: 35, // This represents one box. (See Demo)
        color: [0,0,0,0.65],
        shuffle: true,
        playlist: [
            {src: "filename1.mp3"},
            {src: "filename2.mp3"},
            {src: "filename3.mp3"}
        ]
    });
    
    $("#audioWrapper").audioPlayer().play();
});
```

For additional options read through the module code.
There is also an ability to instantiate this code without JQuery at all.
