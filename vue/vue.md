# vue

# version
node --version
npm --version
vue --version

# install
vue create vuuuue


# filters: 日付形式
  filters: {
    dateFormatter: function (date) {
      const d = new Date(date);
      return (d.getMonth() + 1) + '/' + d.getDate() + ' ' + ('00' + d.getHours()).slice( -2 ) + ':' + ('00' + d.getMinutes()).slice( -2 );
    }
  },


# for Laravel
    <!-- // ララベルのbladeテンプレートで使う場合はphp区別のためアットマークをつける
    <p>@{{ blockTitle }}</p> -->


# MEMO
Vueインスタンスの持つプロパティとメソッドは、ユーザ定義のプロパティと区別するために、頭に$が付けられている


