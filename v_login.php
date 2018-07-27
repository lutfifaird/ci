<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Tutorial</title>
  </head>

  <body>
    <div>
          <section>
            <form action="<?php echo base_url('login'); ?>" method="post">
              <h1>Login Lutfifarid.com</h1>
              <div>
                <input name="username" type="text" placeholder="Username"/>
              </div>
              <div>
                <input name="password" type="password" placeholder="Password"/>
              </div>
			  
			  <p><?php echo $this->session->flashdata('pesan'); ?></p>
              <div>
				<button class="submit" type="submit" name="submit" value="Login">
					<span>Log in</span>
				</button>
              </div>
			  
            </form>
          </section>
        </div>
  </body>
</html>
	