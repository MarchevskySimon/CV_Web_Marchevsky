/*
 * Game start
 */

'use strict';

var gameArea = document.getElementById('gameArea'),
    eater = document.getElementById('eater'),
    foodBox = document.getElementById('box'),
    tails = document.getElementById('tails'),
    score = document.getElementById('score');

var areaWidth = parseInt(getComputedStyle(gameArea).width),
    areaHigth = parseInt(getComputedStyle(gameArea).height);

var osX = 0,
    osY = 0;

var pole = [],
    poleTail = [],
    tailBlock,
    index = 0;

//drawing eater and food
var eaterWidth = parseInt((areaWidth / 100) * 5);
// eaterHigth = ((areaHigth / 100) * 1);

eater.style.width = eaterWidth + 'px';
eater.style.height = eaterWidth + 'px';

foodBox.style.width = eaterWidth + 'px';
foodBox.style.height = eaterWidth + 'px';

foodBox.style.top = Math.floor(Math.random() * 20) * eaterWidth + 'px';
foodBox.style.left = Math.floor(Math.random() * 20) * eaterWidth + 'px';

/*
 * Main start HERE :D
 */
document.addEventListener('keyup', goWASD);

moveEater();

function moveEater() {
    //console.log(getComputedStyle(eater).top, getComputedStyle(eater).left);

    var eaterTop = parseInt(getComputedStyle(eater).top),
        eaterLeft = parseInt(getComputedStyle(eater).left);

    eater.style.top = (eaterTop + (eaterWidth * osY)) + 'px';
    eater.style.left = (eaterLeft + (eaterWidth * osX)) + 'px';

    Eat();

    pole.push([eaterTop, eaterLeft]);
    pole = pole.splice(-1 * index);

    if (tailBlock != null) {
        for (let i = 0; i < poleTail.length; i++) {
            poleTail[i].style.top = pole[i][0] + 'px';
            poleTail[i].style.left = pole[i][1] + 'px';
        }
    }

    Crash();

    setTimeout(function() {
        requestAnimationFrame(moveEater);
    }, eaterWidth * 5);
}

// | W | A | S | D |

function goWASD(event) {
    switch (event.key) {
        case 'w':
            osY = -1;
            osX = 0;
            break;
        case 'a':
            osY = 0;
            osX = -1;
            break;
        case 's':
            osY = 1;
            osX = 0;
            break;
        case 'd':
            osY = 0;
            osX = 1;
            break;
    }
}

/*
 * Eater eat your fooooooood :D
 */

function Eat() {
    var eaterPos = eater.getBoundingClientRect(),
        foodPos = foodBox.getBoundingClientRect();

    if (eaterPos.x == foodPos.x && eaterPos.y == foodPos.y) {
        foodBox.style.top = (Math.floor(Math.random() * 10) + 0) * eaterWidth + 'px';
        foodBox.style.left = (Math.floor(Math.random() * 10) + 0) * eaterWidth + 'px';
        index++;

        tailBlock = document.createElement('div');
        tailBlock.setAttribute('id', 'tail');
        //tailBlock.setAttribute('class', index)

        tailBlock.style.width = eaterWidth + 'px';
        tailBlock.style.height = eaterWidth + 'px';

        tails.appendChild(tailBlock);
        poleTail.push(tailBlock);
        //console.log(pole);
        //console.log(poleTail);
        console.clear();
        console.log(index);
        score.innerHTML = index;
    }
}

/*
 * Ich been fucked up
 */

function Crash() {
    var eaterPos = eater.getBoundingClientRect();

    poleTail.forEach(element => {
        if (eaterPos.x == element.getBoundingClientRect().x && eaterPos.y == element.getBoundingClientRect().y) {
            alert('Game over');
        }
    });

    if (eaterPos.x < 0 || eaterPos.x > areaWidth || eaterPos.y < 0 || eaterPos.y > areaHigth) {
        alert('Game over');
    }
}