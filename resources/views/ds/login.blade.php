
      <form >
        <h1>Login</h1>
        <fieldset class="">

          <label class="label-group">Name:</label>
          <input type="text" name="fname" placeholder="What is your name?" ng-model="formdata.name" required>

          <label class="label-group">Password:</label>
          <input type="password" name="password" placeholder="password" ng-model="formdata.password" required ng-maxlength="16" ng-minlength="8">
        </fieldset>
        <button class="submitbtn " ng-disabled="frm.$invalid" ng-click="getInfo()">Log In</button>
      </form>
