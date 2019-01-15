window.onload = function exampleFunction() {
    document.querySelectorAll(".time").innerHTML = "00:00";
}
var currentSkin = getCurrentSkin();
var stories = new Zuck('stories', {
  backNative: true,
  previousTap: true,
  skin: currentSkin['name'],
  autoFullScreen: currentSkin['params']['autoFullScreen'],
  avatars: currentSkin['params']['avatars'],
  paginationArrows: currentSkin['params']['paginationArrows'],
  list: currentSkin['params']['list'],
  cubeEffect: currentSkin['params']['cubeEffect'],
  localStorage: true,
  timeZone:true,
  stories: [
    Zuck.buildTimelineItem(
      "yourstory", 
      "../modules/social-app/images/avatar/01.png",
      "Your Story",
      "",
      timestamp(),
      [
        ["yourstory-1", "photo", 3, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/1.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/1.jpg", '', false, false, timestamp()],
        ["yourstory-12", "video", 0, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/2.mp4", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/2.jpg", '', false, false, timestamp()],
      ]
    ),
    Zuck.buildTimelineItem(
      "ali",
      "../modules/social-app/images/avatar/14.png",
      "Ali",
      "",
      timestamp(),
      [
        ["ali-1", "video", 0, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/4.mp4", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/4.jpg", '', false, false, timestamp()],
        ["ali-2", "photo", 3, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/5.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/5.jpg", '', false, false, timestamp()],
        ["ali-3", "photo", 3, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/3.png", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/3.png", 'https://ramon.codes', 'Visit my Portfolio', false, timestamp()]
      ]
    ),
    Zuck.buildTimelineItem(
      "ammy",
      "../modules/social-app/images/avatar/15.png",
      "Ammy",
      "",
      timestamp(),
      [
        ["ammy-1", "photo", 5, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/6.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/6.jpg", '', false, false, timestamp()],
        ["ammy-2", "photo", 3, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/7.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/7.jpg", 'http://ladygaga.com', false, false, timestamp()],
      ]
    ),
    Zuck.buildTimelineItem(
      "roger-1",
      "../modules/social-app/images/avatar/16.png",
      "Roger",
      "",
      timestamp(),
      [
        ["roger-1", "photo", 5, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/8.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/8.jpg", '', false, false, timestamp()]
      ]
    ),
    Zuck.buildTimelineItem(
      "justin",
      "../modules/social-app/images/avatar/17.png",
      "Justin",
      "",
      timestamp(),
      [
        ["justin-1", "photo", 10, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/9.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/9.jpg", '', false, false, timestamp()]
      ]
    ),
    Zuck.buildTimelineItem(
        "roy",
        "../modules/social-app/images/avatar/18.png",
        "Roy",
        "",
        timestamp(),
        [
          ["roy-1", "photo", 10, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/9.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/9.jpg", '', false, false, timestamp()]
        ]
      ),
      Zuck.buildTimelineItem(
        "johan",
        "../modules/social-app/images/avatar/19.png",
        "Johan",
        "",
        timestamp(),
        [
          ["johan-1", "photo", 10, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/9.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/9.jpg", '', false, false, timestamp()]
        ]
      ),
      Zuck.buildTimelineItem(
        "sado",
        "../modules/social-app/images/avatar/20.png",
        "Sado",
        "",
        timestamp(),
        [
          ["sado-1", "photo", 10, "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/9.jpg", "https://raw.githubusercontent.com/ramon82/assets/master/zuck.js/stories/9.jpg", '', false, false, timestamp()]
        ]
      )
  ]
});