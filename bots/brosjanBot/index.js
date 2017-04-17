const Discord = require('discord.js');

const bot = new Discord.Client();

const token = 'MzAyOTUyMDUyNDI0ODM1MDkz.C9RESw.bWj47osBihz1B6w0BOgssqZV8_0';

const prefix = "ß";

bot.on('ready', () => {
  console.log('Broosjan!');
  bot.user.setGame("with myself");
});

bot.on('guildMemberAdd', member => {
  let guild = member.guild;
  guild.defaultChannel.sendMessage(`Ny brosjan ${member.user}!`);
});

bot.on('message', message => {
  if (message.author.bot) return;
  if (!message.content.startsWith(prefix)) return;

  let command = message.content.split(" ")[0];
  command = command.slice(prefix.length);

  let args = message.content.split(" ").slice(1);


  if (command === "say") {
    message.channel.sendMessage(args);
  }

  if (command === "kys") {
    message.channel.sendMessage("Kill yourself " + args);
  }
  if (command === "turbosnus") {
    message.channel.sendMessage("Turbosnus: Verb - The art of using an entire can of snus in one day.")
  }
  if (command === "kick") {
    let modRole = message.guild.roles.find("name", "notbad-kids");
    if (message.member.roles.has(modRole.id)) {
      if (message.mentions.users.size === 0) {
        return message.reply("Please mention someone to kick them.")
      }
      let kickMember = message.guild.member(message.mentions.users.first());
      if (!kickMember) {
        return message.reply("That user doesn't exist.");
      }
      if (!message.guild.member(bot.user).hasPermission("KICK_MEMBERS")) {
        return message.reply("I'm sorry, but I'm not allowed to do that.")
      }
        let channel = bot.channels.find("name", "bot-logs");
        kickMember.kick();
        message.channel.sendMessage(`${args} has been kicked`);
        channel.sendMessage(`${args} was kicked by ${message.author}.`);
    } else {
      message.reply("I'm sorry, but I can't let you do that.");
    }
  }

  if (command === "ayy") {
    message.channel.sendMessage("lmao");
  }
  if (command === "weeb") {
    message.channel.sendMessage("Xxxtentacion is the biggest weeb on the planet. Also, his music sucks.");
  }
  if (command === "avatar") {
    message.reply(message.author.avatarURL);
  }
});



bot.login(token);
