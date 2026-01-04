


function Test(){
    const testJSON = [
    {
        id:"1",
        name:"John Doe",
        email:"test@test.com",
        dob:"1990-01-01"
    },
    {
        id:"2",
        name:"John Doe",
        email:"test@test.com",
        dob:"1990-01-01"
    },
    {
        id:"3",
        name:"John Doe",
        email:"test@test.com",
        dob:"1990-01-01"
    },
    {
        id:"4",
        name:"John Doe",
        email:"test@test.com",
        dob:"1990-01-01"
    },
    {
        id:"5",
        name:"John Doe",
        email:"test@test.com",
        dob:"1990-01-01"
    },
    {
        id:"6",
        name:"John Doe",
        email:"test@test.com",
        dob:"1990-01-01"
    },
];
    const str = JSON.stringify(testJSON);
    console.log("Printing test stringify data", str);

    const parsedData = JSON.parse(str);
    console.log("Printing test parsed data", parsedData);

    const data = parsedData.find(item => item.id === "4");
    console.log("Printing test find data", data);
    return false;
}
// const test = testJSON.map((item)=>{

// })