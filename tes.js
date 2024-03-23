console.log("test!");

const categories = [
    {no:1,
    name: "テスト"},
    {no:2,
    name: "tse"},
];

let a =[];
a.push({});
console.log(a);


const array = [
      {
        id: '1',
        title: 'bbb',
        category: 2,
      },
      {
        id: '2',
        title: 'aaa',
        category: 2,
      },
      {
        id: '3',
        title: 'ccc',
        category: 1,
      },
];

let v = {};
categories.forEach((category) => {
    console.log(category.no);
    // v.push(category.no);
    console.log(array.filter(a => a.category === category.no));
    // v[1]=category.no;

    // v[category.no]=(array.find(a => a.category === category.no));
    // v[category.no][].push(array.find(a => a.category === category.no));

});
console.log(v);

// categories.map((a, index) => {
//     console.log(a);
//     console.log('aa'+index);
// });


array.map((a, index) => {
    // console.log(a.id);


});

console.log("=====================END");

