const commando = require('discord.js-commando');

class DiceRollCommand extends commando.Command {
  constructor(client) {
    super(client, {
      name: 'roll',
      group: 'random',
      memberName: 'roll',
      description: 'rolls a dice'
    });
  }

  async run(message, args) {
    var roll =  Math.floor(Math.random() * 20) +1;
    if (roll == 8 || roll == 11 || roll == 18 ) {
      message.reply("You rolled an " + roll);
    }
    else {
      message.reply("You rolled a " + roll);
    }

  }
}
module.exports = DiceRollCommand;
