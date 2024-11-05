// get sides
// Equilateral Triangle:
// All sides are equal.
// Example: 5 cm, 5 cm, 5 cm.

// Isosceles Triangle:
// Two sides are equal.
// Example: 6 cm, 6 cm, 4 cm.

// Scalene Triangle:
// All sides are different.
// Example: 3 cm, 4 cm, 5 cm.

function getSides(){
    var a = parseFloat(prompt("Enter side A"));
    var b = parseFloat(prompt("Enter side B"));
    var c = parseFloat(prompt("Enter side C"));
    console.log(a, b, c);
//     find if sides form Triangle
//         (a+b>c) && (b+c>a) && (c+b>a)
    if ((a+b>c) && (b+c>a) && (c+b>a)){
//     find type of Triangle
//         equilateral
//         (a==b)&&(b==c)&&(c==a)
//         isoceles
//         (a==b)||(b==c)|| (c==a)
//         scalene
//         a!=b b!=c c!=a
        if((a==b)&&(b==c)&&(c==a))
            document.getElementById("type").innerHTML="Triangle type: Equilateral";
        else if((a==b)||(b==c)||(c==a))
            document.getElementById("type").innerHTML="Triangle type: Isoceles";
        else
            document.getElementById("type").innerHTML="Triangle type: Scalene";

//     find area of triangle
//         p=(a+b+c)/2
//         area=sqrt(p(p-a)(p-b)(p-c))      
    var p=(a+b+c)/2;
    var area = Math.sqrt(p*(p-a)*(p-b)*(p-c));
    document.getElementById("area").innerHTML = area;
    } else {
        alert("Sides do not form a triangle!!!");
    }
}



