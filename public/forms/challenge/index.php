<style>
    .container {
        display: flex;
        flex-direction: column;
        width: 35vw;
        margin: 0;
        padding: 0;
    }


    form {
        display: flex;
        flex-direction: column;
    }
    
    input {
        width: 35vw;
        height: 5vh;
    }

    .reason {
        font-size: 1.7em;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }

    .reason > span {
        text-align: left;
    }

    /* .reason {
        display: grid;
    } */
    
    .message {
        display: grid;
    }
</style>

<h1>Challenge</h1>

<h2>Email Form</h2>
<div class="container input">
    <form method="POST" action="process.php">
        <div class="username input">
            <label for="name">Name: </label>
            <input name="name" type="text" />
        </div>

        <div class="email input">
            <label for="email">Email: </label>
            <input name="email" type="text" />
        </div>

        <div class="reason input">
            <span>Reason for contact:</span>
            <input class="checkbox" type="checkbox" name="reason" id="consult" value="consult" /> <label for="consult">Consult</label>
            <input class="checkbox" type="checkbox" name="reason" id="question" value="question" /> <label for="question">Question</label>
            <input class="checkbox" type="checkbox" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
        </div>

        <div class="message input">
            <label for="message">Message: </label>
            <textarea name="message" id="message" rows="7"></textarea>
        </div>

        <div>
            <input type="submit" value="send" />
        </div>

    </form>
</div>

