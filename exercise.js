class ReversePolishNotation{

    static main(args){
      let i = 0;
      let listOfNumbers = [];
      while(i < args.length){
        let currentValue = args[i];
        if(!isNaN(currentValue)){
          currentValue = parseInt(currentValue);
          listOfNumbers.push(currentValue);
        }else{
          let result = ReversePolishNotation.checkOperations(currentValue, listOfNumbers);
          if(i == args.length-1 || result == false){
            return result;
          }else{
            listOfNumbers.push(result);
          }
        }
        i = i+1;
      }
      return "oe";
    }
  
    static checkOperations(op, listOfNumbers){
      if(listOfNumbers.length>=2){
        let lastElement = listOfNumbers.pop();
        let prevElement = listOfNumbers.pop();
        return ReversePolishNotation.executeOperations(op, lastElement, prevElement);
      }
    }
  
    static executeOperations(op, lastElement, prevElement){
      if(op === "+"){
        return prevElement + lastElement;
      }else if (op === "-"){
        return prevElement - lastElement;
      }else if (op === "*"){
        return prevElement * lastElement;
      }else if (op === "/"){
        if(lastElement != 0){
          return prevElement / lastElement;
        }
        return false;
      }
    }
  
  }
  
  let args3 = ["2", "3", "-", "2", "+", "4", "*", "2", "/"];
  console.log(ReversePolishNotation.main(args3));