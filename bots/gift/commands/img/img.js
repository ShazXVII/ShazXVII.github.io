const commando = require('discord.js-commando');

class ImgFindCommand extends commando.Command {
  constructor(client) {
    super(client, {
      name: 'img',
      group: 'img',
      memberName: 'img',
      description: 'finds an appropriate image'
    });
  }
//var fs = require('fs');
//var files = fs.readdirSync('reactions/');
  async run(message, args) {
    var args = message.content.split(' ').slice(1);
    let fs = require('fs');
    var files = fs.readdirSync('reactions/').filter(file => file.includes(args));
    console.log(files[0]);
    if (files[0] != 0) {
      var path = 'reactions/' + files[0];
      message.channel.sendFile(path);
    } else {
      console.log("couldn't find a file");
    }
  }
}
module.exports = ImgFindCommand;
