# Task for sportradar - ScoreBoard - Library for other developers

I created the simplest solution focusing on User experience of Library, which will be a developer using this library.

All focus around ScoreBoard which in current implementation:
- is an Agregate of Games
- and due to time limit it is a Facade for the library (it violates SRP because of Allowing to get uUmmary directly from Aggreaget, which IMO should be done elsewhere to separate Queries from Commands)

ScoreBoard allow for all options specified in task, which can be seen in `test.php` file

There are many things that can be done next:
- Some way to retrieve Scoreboards from outside source. Can be build by event, or just from db.
- Games can have it's own repository, they can use redis or other fast db to store infomation about score.
- Any Namespaces, composer, autoloading, etc. - I just didn't have time to do it.

I think all other stuff we can discuss on a meeting.