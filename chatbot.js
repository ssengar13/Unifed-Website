$(document).ready(() => {
    onInitialization();
});

var conversationContainer = document.getElementById("conversation-container"),
    currentQuestion,
    userSessionId,
    chatbotScript;

const randomString = () => {
    var length = 6;
    var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var result = "";
    for (var i = length; i > 0; --i)
        result += chars[Math.floor(Math.random() * chars.length)];
    return result;
};

//function to check if an object has a valid property
const checkEmptyOrNull = (object, checkProperty) => {
    if (
      object.hasOwnProperty(checkProperty) &&
      object[checkProperty] !== "" &&
      object[checkProperty] !== null
    ) {
      return true;
    } else {
      return false;
    }
  };


function randomUUIdV4() {
    return "xxxxxxxx-xxxx-7xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function (c) {
        var r = (Math.random() * 16) | 0,
            v = c == "x" ? r : (r & 0x3) | 0x8;
        return v.toString(16);
    });
}

function isIncognito(callback) {
    var fs = window.RequestFileSystem || window.webkitRequestFileSystem;

    if (!fs) {
        callback(false);
    } else {
        fs(window.TEMPORARY,
            100,
            callback.bind(undefined, false),
            callback.bind(undefined, true)
        );
    }
}

const checkForUserSession = () => {
    userSessionId = sessionStorage.getItem("userSessionId");
    if (userSessionId === null || userSessionId === "") {
        userSessionId = randomUUIdV4();
        sessionStorage.setItem("userSessionId", userSessionId);
    }
};


const onInitialization = () => {
    checkForUserSession();
    isIncognito(function (itIs) {
        if (itIs) {
            userSessionId = randomUUIdV4();
            console.log("You are in incognito mode");
        } else {
            checkForUserSession();
        }
    });
    getChatbotScript();
};

const getChatbotScript = () => {
    chatbotScript = {
        "script_id": "1",
        "script_name": "unifiedvoice",
        "initial_message": "Hi there, how can i help you today?",
        "end_greeting_message":"Thank you!!",
        "chatbot_name": "Unified Voice Communication",
        "questions": [
            {
                "question_no": "1",
                "question_text": "what would you like to know more about..",
                "optional_text": "",
                "answers": [
                    {
                        "answer_text": "Where are we situated?",
                        "next_question": "2"
                    },
                    {
                        "answer_text": "What all products/services we have?",
                        "next_question": "5"
                    },
                    {
                        "answer_text": "What are the property taxes and other fees?",
                        "next_question": "6"
                    }
                ]
            },
            {
                "question_no": "2",
                "question_text": "We have offices in multiple locations to better serve our customers- <ol><li>Pune</li><li>Chennai</li><li>Bangalore</li><li>Noida</li><li>Hyderabad</li><li>Delaware, US</li></ol>",
                "optional_text": "Is there anything else you want me help you with?",
                "answers": [
                    {
                        "answer_text": "Yes",
                        "next_question": "3"
                    },
                    {
                        "answer_text": "No",
                        "next_question": "4"
                    }
                ]
            },
            {
                "question_no": "3",
                "question_text": "You can contact us at: +91 4446115353, Also you can submit a query <a href='contactus.html' target='_blank'>here</a>",
                "optional_text": "what would you like to know more about..",
                "answers": [
                    {
                        "answer_text": "What all locations are available?",
                        "next_question": "2"
                    },
                    {
                        "answer_text": "What are the features and amenities of the property?",
                        "next_question": ""
                    },
                    {
                        "answer_text": "What are the property taxes and other fees?",
                        "next_question": ""
                    }
                ]
            },
            {
                "question_no": "4",
                "question_text": "Thankyou!! Have a nice day!! Feel free to contact us anytime.",
                "optional_text": "You can contact us at: +91 4446115353, Also you can submit a query <a href='contactus.html' target='_blank'>here</a>",
                "answers": [

                ]
            }

        ]
    }
    conversationContainer.innerHTML +=
        '<div class="init-msg"> ' + chatbotScript.initial_message + " </div>";
    findQuestionInScript(1);
}

const findQuestionInScript = (currentQueNumber) => {
    currentQuestion = chatbotScript.questions.find(
        (ele) => ele.question_no == currentQueNumber
    );
    runScript();
};

const runScript = () => {
    setTimeout(() => {
        printBotMessage(currentQuestion.question_text);
        if (checkEmptyOrNull(currentQuestion, "optional_text")) {
            printBotMessage(currentQuestion.optional_text);
        }
    }, 2500);
    showTypingIndicator();
    setTimeout(() => {
        printAnsButtons(currentQuestion.answers);
    }, 3000);
}

const printBotMessage = (queText) => {
    $(".typing").hide();
    conversationContainer.innerHTML +=
      '<div class="msg cbt"> <img src="assets/images/icon/icon_cbt.png" width="36" height="36"> <div class="content">' +
      queText +
      "</div></div>";
    $("html, body").animate(
      {
        scrollTop:
          $(window).scrollTop() + conversationContainer.scrollHeight + 50,
      },
      "slow"
    );
  };

  const printUserMessage = (ansText) => {
    conversationContainer.innerHTML +=
      '<div class="msg usr"> <div class="content"> <xmp style="white-space: normal;display: block;font-family: inherit;margin: 0px 0px;">' +
      ansText +
      '</xmp></div><img src="assets/images/icon/usr.png" width="36" height="36"> </div>';
    setTimeout(() => {
      $("html, body").animate(
        {
          scrollTop:
            $(window).scrollTop() + conversationContainer.scrollHeight + 50,
        },
        "slow"
      );
    }, 500);
  };

const showTypingIndicator = () => {
    conversationContainer.innerHTML +=
      '<div class="msg cbt typing"> <img src="assets/images/icon/icon_cbt.png" width="36" height="36"> <div class="content" style="display: flex;">' +
      chatbotScript.chatbot_name +
      ' is Typing <div id="wave"><span class="dot"></span><span class="dot"></span><span class="dot"></span></div> </div></div>';
    $("html, body").animate(
      {
        scrollTop:
          $(window).scrollTop() + conversationContainer.scrollHeight + 50,
      },
      "slow"
    );
  };


  const printAnsButtons = (answersArray) => {
    const divId = randomString();
    conversationContainer.innerHTML += "<div id=" + divId + ' class="opt"></div>';
    const btnContainer = document.getElementById(divId);
    answersArray.forEach((answer) => {
        const btnId = randomString();
        btnContainer.innerHTML +=
          " <button id=" +
          btnId +
          " value=" +
          answer.answer_text +
          ' onclick="setAnswer(' +
          btnId +
          ')" class="btn btnOption">' +
          answer.answer_text +
          "</button>";
    });
    $("html, body").animate(
      {
        scrollTop:
          $(window).scrollTop() + conversationContainer.scrollHeight + 50,
      },
      "slow"
    );
  };

  const setAnswer = (btnId) => {
    document.querySelector(".opt").remove();
    const textAnswer = btnId.innerText;
    printUserMessage(textAnswer);
    const answer = currentQuestion.answers.find((ele) => ele.answer_text === textAnswer);
      if (checkEmptyOrNull(answer, "next_question")) {
        findQuestionInScript(answer.next_question);
      } else {
        printEndGreeting();
      }
  };

  const printEndGreeting = () => {
    conversationContainer.innerHTML +=
      '<div class="init-msg"> ' + chatbotScript.end_greeting_message + " </div>";
    $("html, body").animate(
      {
        scrollTop:
          $(window).scrollTop() + conversationContainer.scrollHeight + 50,
      },
      "slow"
    );
  };