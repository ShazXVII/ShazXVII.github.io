const commando = require('discord.js-commando');

class ImgListCommand extends commando.Command {
  constructor(client) {
    super(client, {
      name: 'listimg',
      group: 'img',
      memberName: 'listimg',
      description: 'lists all appropriate images'
    });
  }
//var fs = require('fs');
//var files = fs.readdirSync('reactions/');
  async run(message, args) {
    var args = message.content.split(' ').slice(1);
    let fs = require('fs');
    var files = fs.readdirSync('reactions/').filter(file => file.includes(args));
    message.channel.sendMessage(files);
  }
}
module.exports = ImgListCommand;
