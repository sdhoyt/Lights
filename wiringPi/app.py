from flask import Flask, render_template
import subprocess
import shlex
app = Flask(__name__)

sendPath = '/var/www/Lights/codesend'

@app.route("/")
def main():
    return render_template('index.html')

@app.route("/switchOn1")
def switchOn1():
	code = 21811
	subprocess.call(shlex.split(sendPath + ' ' + code))
	print "turned on 1"
	return render_template('index.html')

@app.route("/switchOff1")
def switchOff1():
	code = 21820
	subprocess.call(shlex.split(sendPath + ' ' + code))
	print "turned off 1"
	return render_template('index.html')

@app.route("/switchOn2")
def switchOn2():
	code = 21955
	subprocess.call(shlex.split(sendPath + ' ' + code))
	print "turned on 2"
	return render_template('index.html')

@app.route("/switchOff2")
def switchOff2():
	code = 21964
	subprocess.call(shlex.split(sendPath + ' ' + code))
	print "turned off 2"
	return render_template('index.html')

@app.route("/switchOn3")
def switchOn3():
	code = 22275
	subprocess.call(shlex.split(sendPath + ' ' + code))
	print "turned on 3"
	return render_template('index.html')

@app.route("/switchOff3")
def switchOff3():
	code = 22284
	subprocess.call(shlex.split(sendPath + ' ' + code))
	print "turned off 3"
	return render_template('index.html')


if __name__ == '__main__':
 	app.run()


