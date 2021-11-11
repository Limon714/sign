        var a001 = Math.floor(Math.random() * 10);
        var a002 = Math.floor(Math.random() * 10);
        var a003 = a001 + a002;

        var b001 = Math.floor(Math.random() * 10);
        var b002 = Math.floor(Math.random() * 10);
        var b003 = b001 + b002;

        var c001 = Math.floor(Math.random() * 10);
        var c002 = Math.floor(Math.random() * 10);
        var c003 = c001 + c002;

        var d001 = Math.floor(Math.random() * 10);
        var d002 = Math.floor(Math.random() * 10);
        var d003 = d001 + d002;

        var e001 = Math.floor(Math.random() * 10);
        var e002 = Math.floor(Math.random() * 10);
        var e003 = e001 + e002;

        var f001 = Math.floor(Math.random() * 10);
        var f002 = Math.floor(Math.random() * 10);
        var f003 = f001 + f002;

        var g001 = Math.floor(Math.random() * 10);
        var g002 = Math.floor(Math.random() * 10);
        var g003 = g001 + g002;

        var h001 = Math.floor(Math.random() * 10);
        var h002 = Math.floor(Math.random() * 10);
        var h003 = h001 + h002;

        var i001 = Math.floor(Math.random() * 10);
        var i002 = Math.floor(Math.random() * 10);
        var i003 = i001 + i002;

        var j001 = Math.floor(Math.random() * 10);
        var j002 = Math.floor(Math.random() * 10);
        var j003 = j001 + j002;

        var z = 0;
        z++;
        var y = 0;
        y++;

        function begin001() {
            number001.innerHTML = y++;
            disappear001.innerHTML = "";
            message001.innerHTML = a001 + "<br />" + "+" + "<br />" + a002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input001 /> <button onclick=submit001()>Submit</button>";
        }

        function submit001() {
            var answer001 = input001.value;
            show001.innerHTML = answer001;
            if (answer001 == a003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question002()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question002()>Next</button>";
            }
        }

        function question002() {
            number001.innerHTML = y++;
            message001.innerHTML = b001 + "<br />" + "+" + "<br />" + b002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input002 /> <button onclick=submit002()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit002() {
            var answer001 = input002.value;
            show001.innerHTML = answer001;
            if (answer001 == b003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question003()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question003()>Next</button>";
            }
        }

        function question003() {
            number001.innerHTML = y++;
            message001.innerHTML = c001 + "<br />" + "+" + "<br />" + c002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input003 /> <button onclick=submit003()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit003() {
            var answer001 = input003.value;
            show001.innerHTML = answer001;
            if (answer001 == c003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question004()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question004()>Next</button>";
            }
        }

        function question004() {
            number001.innerHTML = y++;
            message001.innerHTML = d001 + "<br />" + "+" + "<br />" + d002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input004 /> <button onclick=submit004()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit004() {
            var answer001 = input004.value;
            show001.innerHTML = answer001;
            if (answer001 == d003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question005()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question005()>Next</button>";
            }
        }

        function question005() {
            number001.innerHTML = y++;
            message001.innerHTML = e001 + "<br />" + "+" + "<br />" + e002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input005 /> <button onclick=submit005()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit005() {
            var answer001 = input005.value;
            show001.innerHTML = answer001;
            if (answer001 == e003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question006()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question006()>Next</button>";
            }
        }

        function question006() {
            number001.innerHTML = y++;
            message001.innerHTML = f001 + "<br />" + "+" + "<br />" + f002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input006 /> <button onclick=submit006()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit006() {
            var answer001 = input006.value;
            show001.innerHTML = answer001;
            if (answer001 == f003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question007()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question007()>Next</button>";
            }
        }

        function question007() {
            number001.innerHTML = y++;
            message001.innerHTML = g001 + "<br />" + "+" + "<br />" + g002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input007 /> <button onclick=submit007()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit007() {
            var answer001 = input007.value;
            show001.innerHTML = answer001;
            if (answer001 == g003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question008()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question008()>Next</button>";
            }
        }

        function question008() {
            number001.innerHTML = y++;
            message001.innerHTML = h001 + "<br />" + "+" + "<br />" + h002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input008 /> <button onclick=submit008()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit008() {
            var answer001 = input008.value;
            show001.innerHTML = answer001;
            if (answer001 == h003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question009()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question009()>Next</button>";
            }
        }

        function question009() {
            number001.innerHTML = y++;
            message001.innerHTML = i001 + "<br />" + "+" + "<br />" + i002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input009 /> <button onclick=submit009()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit009() {
            var answer001 = input009.value;
            show001.innerHTML = answer001;
            if (answer001 == i003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question010()>Next</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=question010()>Next</button>";
            }
        }

        function question010() {
            number001.innerHTML = y++;
            message001.innerHTML = j001 + "<br />" + "+" + "<br />" + j002 + "<br />" + "__________";
            message002.innerHTML = "<input type=text id=input010 /> <button onclick=submit010()>Submit</button>";
            message003.innerHTML = "";
            show001.innerHTML = "";
            message004.innerHTML = "";
        }

        function submit010() {
            var answer001 = input010.value;
            show001.innerHTML = answer001;
            if (answer001 == j003) {
                z++;
                message003.innerHTML = "Correct";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=end001()>End of Quiz</button>";
            }
            else {
                message003.innerHTML = "Incorrect";
                message002.innerHTML = "";
                message004.innerHTML = "<button onclick=end001()>End of Quiz</button>";
            }
        }

        function end001() {
            message001.innerHTML = "End of Quiz";
            message002.innerHTML = "You scored " + (z - 1) + " out of 10";
            message003.innerHTML = "Thanks for taking this quiz.";
            show001.innerHTML = "";
            message004.innerHTML = "<button onclick=repeat001()>Repeat</button>";
        }

        function repeat001() {
            location.reload();
        }