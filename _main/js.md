# JavaScript

# 型
typeof variable

# ブラウザセッション
## 保存
sessionStorage.setItem('セッション名',
    JSON.stringify({
        abc: 'じょうほう',
    })
);

## 取得
var hensuu = JSON.parse(sessionStorage.getItem('セッション名'));

## 削除
var hensuu = JSON.parse(sessionStorage.getItem('セッション名'));


# log 出力、変数
const str = 'Life, the universe and everything. Answer:';
console.log(`${str} ${str.length}`);



# 非同期
外部サイト「JavaScript Promiseの本」：https://azu.github.io/promises-book/

## 〇秒後に実行させる関数
async promiseMin(min) {
    return new Promise((resolve) => {
        setTimeout(
            () => {
                resolve(`${min}秒後の実行 - ${this.time()}<br>`);
            }, min * 1000,
        );
    });
},

## 順番に実行させる関数
let self = this;
async function promiseAwait() {
    self.txt += await self.promiseMin(3);
    self.txt += await self.promiseMin(5);
};

## 同時に開始してすべての完了を待つ関数
let self = this;
async function promiseAll() {
    return Promise.all([self.promiseMin(5), self.promiseMin(10)]);
}


# 乱数
rnd() {
    return Math.floor(Math.random() * 100);
}
