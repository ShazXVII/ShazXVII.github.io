const commando = require('discord.js-commando');

class GifFindCommand extends commando.Command {
  constructor(client) {
    super(client, {
      name: 'gif',
      group: 'img',
      memberName: 'gif',
      description: 'finds an appropriate gif'
    });
  }
//var fs = require('fs');
//var files = fs.readdirSync('reactions/');
  async run(message, args) {
    var args = message.content.split(' ').slice(1);
    var path = "http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=" + args;
    console.log(path);
    message.channel.sendMessage(path);
  }
}
module.exports = GifFindCommand;
