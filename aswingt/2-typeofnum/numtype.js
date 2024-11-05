function sum(num){
    var s = 0, n = 1;
    while(n < num){
        if(num % n == 0)
            s += n;
        n++;
    }
    return s;
}

function check(){
    var num = parseInt(document.getElementById("num").value);
    console.log(num);
    var s = sum(num);
    console.log(s);
    if (s == num)
        alert("Perfect");
    else if(s > num)
        alert("Abundant");
    else
        alert("Deficient");
}

