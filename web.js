// function myFunction() {
//   return "Result is ", 3 + 3;
// }
// try {
//   let result = myFunction(); // Function that might throw an error
//   console.log(result);
// } catch (error) {
//   console.error("Error occurred:", error.message);
//   // console.log("Error occured");
// }

// function myFunction() {
//   return 5;
// }
// try {
//   let result = myFunction();
//   console.log(result);
// } catch (error) {
//   console.log(error.message + "\n" + error.name);
// } finally {
//   console.log("Hehehe");
// }

// function myfunction() {
//   return "Successful";
// }
// try {
//   let result = myfunction();
//   console.log(result);
// } catch (error) {
//   setTimeout(() => {
//     //function()
//     console.log("Hii Everyone");
//   }, 1000);
//   setTimeout(() => {
//     console.log("Hii Everyone2");
//   }, 2000);
//   setTimeout(() => {
//     console.log("Hii Everyone3");
//   }, 3000);
//   setTimeout(() => {
//     console.log("Hii Everyone4");
//   }, 4000);
// }
// try {
//   const value = eval(2 + 3 + 4);
//   console.log(value);
// } catch (error) {
//   console.log("error is: ", error);
// }

// const divide = (a, b) => {
//   if (b == 0) {
//     throw new Error("Not divisible by 0");
//   }
//   return a / b;
// };
// try {
//   const result = divide(12, 0);
//   console.log(result);
// } catch (error) {
//   console.log("Error: ", error.message);
// }

// const divide = (a, b) => {
//   if (b == 0) {
//     throw new Error("Not divisible by 0");
//   }
//   return a / b;
// };
// try {
//   const result = divide(10, 0);
//   console.log(result);
// } catch (error) {
//   console.log(error);
// } finally {
//   console.log("Executed");
// }

const divide = (a, b) => {
  if (b == 0) {
    throw new Error("Not divisible by 0");
  }
  return a / b;
};

try {
  const result = divide(12, 0);
  console.log(result);
} catch (error) {
  console.log(error.message);
}
