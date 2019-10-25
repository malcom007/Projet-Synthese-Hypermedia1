<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Support Thechnique </h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>selectionner le sujet </label>
                                    <select type="number" class="form-control" >
                                        <option value="hide">selectionner sujet</option>
                                        <option value="february">deposer plainte</option>
                                        <option value="march">etc...</option>
                                        <option value="march">Autre</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>entre votre votre sujet</label>
                                    <input type="text" class="form-control"  placeholder="sujet" value="moyibi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>edite</label>
                                    <textarea class="textarea" placeholder="What are you doing right now?"id="comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','left')">Sumit</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" >Annuler</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>