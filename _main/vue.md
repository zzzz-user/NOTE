# Vue CLI 3

# version
node --version
npm --version
vue --version

# install
vue create vuuuue


# 日付形式
  filters: {
    dateFormatter: function (date) {
      const d = new Date(date);
      return (d.getMonth() + 1) + '/' + d.getDate() + ' ' + ('00' + d.getHours()).slice( -2 ) + ':' + ('00' + d.getMinutes()).slice( -2 );
    }
  },

