// repeat the string generation function on a timer
//  returning the randomized string
function repeatStringGeneration(stringLength, repeatTime){
  let variable = setInterval(generateRandString, repeatTime, stringLength);
  return variable;
}

// string geneation function for a given length
function generateRandString(stringLength) {
    let stringCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
      + 'abcdefghijklmnopqrstuvwxyz0123456789';
    let randString = '';

    // loop through selecting chars randomly
    for (let i = 0; i < stringLength; i++) {
        randString +=
          stringCharacters.charAt(Math.floor(Math.random()
          *stringCharacters.length));
    }

    return randString;
}
