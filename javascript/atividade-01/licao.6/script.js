// Juros compostos
alert("Juros compostos");
var numCap = Number.parseFloat(prompt("Digite o capital inicial:"));
console.log(numCap);
var numTemp = Number.parseInt(prompt("Digite a quantidade de meses:"));
console.log(numTemp);
var numTaxa = Number.parseFloat(prompt("Digite a taxa mensal:"));
console.log(numTaxa);
var total = numCap * (1 + numTaxa) ** numTemp;
alert("Total: " + (total).toFixed(2));
